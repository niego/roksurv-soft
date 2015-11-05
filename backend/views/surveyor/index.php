<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SurveyorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Surveyors');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surveyor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Surveyor'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'surveyor_no',
            'nama_lengkap',
            'email:email',
            // 'company',
            // 'jenis_kelamin',
            // 'identitas',
            // 'identitas_no',
            // 'no_hp',
            // 'no_telp',
            // 'fax',
            // 'created_by',
            // 'created_date',
            // 'updated_by',
            // 'updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
