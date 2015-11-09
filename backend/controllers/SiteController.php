<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use backend\models\Lokasi;
use yii\helpers\Json;
use yii\db\Query;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    // public function behaviors()
    // {
        // return [
            // 'access' => [
                // 'class' => AccessControl::className(),
                // 'rules' => [
                    // [
                        // 'actions' => ['login', 'error'],
                        // 'allow' => true,
                    // ],
                    // [
                        // 'actions' => ['logout', 'index'],
                        // 'allow' => true,
                        // 'roles' => ['@'],
                    // ],
                // ],
            // ],
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
        // ];
    // }
	
	/** @inheritdoc */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete'  => ['post'],
                    'confirm' => ['post'],
                    'block'   => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function () {
                            return Yii::$app->user->identity->getIsAdmin();
                        },
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->context->layout = "login";
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
	
	public function actionGetKabKota() {
		$out = [];
		if (isset($_POST['depdrop_parents'])) {
			$parents = $_POST['depdrop_parents'];
			if ($parents != null) {
				$prop_id = $parents[0];
				$psub_id = Lokasi::find()->where('id = :id', [':id' => $prop_id])->one()->propinsi;

				$query = new Query;
				$query->select(['id', 'nama as name'])
						->from('lokasi')
						->where('propinsi = "' . $psub_id . '" and kabupaten_kota <> 00 and kecamatan = 00');
				$command = $query->createCommand();
				$data = $command->queryAll();
				$out = array_values($data);
				echo Json::encode(['output'=>$out, 'selected'=>'']);
				return;
			}
		}
		echo Json::encode(['output'=>'', 'selected'=>'']);
	}
 
	public function actionGetKecamatan() {
		$out = [];
		if (isset($_POST['depdrop_parents'])) {
			$parents = $_POST['depdrop_parents'];
			if ($parents != null) {
				$kab_id = $parents[0];
				$ksub_id = Lokasi::find()->where('id = :id', [':id' => $kab_id])->one();
				$query = new Query;
				$query->select(['id', 'nama as name'])
						->from('lokasi')
						->where('propinsi = "' . $ksub_id->propinsi . '" and kabupaten_kota = "' . $ksub_id->kabupaten_kota . '" and kecamatan > 0');
				
				$command = $query->createCommand();
				$data = $command->queryAll();
				$out = array_values($data);
				echo Json::encode(['output'=>$out, 'selected'=>'']);
				return;
			}
		}
		echo Json::encode(['output'=>'', 'selected'=>'']);
	}
}
