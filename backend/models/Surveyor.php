<?php

namespace backend\models;
use dektrium\user\models\User;
use Yii;

/**
 * This is the model class for table "surveyor".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $surveyor_no
 * @property string $nama_lengkap
 * @property string $email
 * @property string $company
 * @property string $jenis_kelamin
 * @property string $identitas
 * @property string $identitas_no
 * @property string $no_hp
 * @property string $no_telp
 * @property string $fax
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_by
 * @property string $updated_date
 *
 * @property Client[] $clients
 * @property User $user
 */
class Surveyor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surveyor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'nama_lengkap', 'email', 'company', 'jenis_kelamin', 'identitas', 'identitas_no', 'no_hp'], 'required'],
            [['user_id', 'created_by', 'updated_by'], 'integer'],
            [['jenis_kelamin', 'identitas'], 'string'],
            [['created_date', 'updated_date'], 'safe'],
            [['surveyor_no', 'nama_lengkap', 'email', 'identitas_no'], 'string', 'max' => 25],
            [['company'], 'string', 'max' => 50],
            [['no_hp', 'no_telp', 'fax'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'surveyor_no' => Yii::t('app', 'Surveyor No'),
            'nama_lengkap' => Yii::t('app', 'Nama Lengkap'),
            'email' => Yii::t('app', 'Email'),
            'company' => Yii::t('app', 'Company'),
            'jenis_kelamin' => Yii::t('app', 'Jenis Kelamin'),
            'identitas' => Yii::t('app', 'Identitas'),
            'identitas_no' => Yii::t('app', 'Identitas No'),
            'no_hp' => Yii::t('app', 'No Hp'),
            'no_telp' => Yii::t('app', 'No Telp'),
            'fax' => Yii::t('app', 'Fax'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_date' => Yii::t('app', 'Created Date'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_date' => Yii::t('app', 'Updated Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['surveyor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
	
	public function beforeSave()
	{
		if($this->isNewRecord){
			$this->created_date = date('Y-m-d H:i:s');
			$this->created_by = Yii::$app->user->getId();
		}else{
			$this->updated_date = date('Y-m-d H:i:s');
			$this->updated_by = Yii::$app->user->getId();
		}
		return parent::beforeSave();
	}
}
