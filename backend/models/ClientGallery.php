<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client_gallery".
 *
 * @property integer $id
 * @property integer $client_id
 * @property string $image
 * @property string $image_thumb
 * @property string $created_date
 *
 * @property Client $client
 */
class ClientGallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id'], 'required'],
            [['client_id','created_by','updated_by'], 'integer'],
            [['created_date','updated_date'], 'safe'],
			[['image'], 'file', 'extensions' => 'jpeg, gif, png'],   
            [['image_thumb'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'client_id' => Yii::t('app', 'Client ID'),
            'image' => Yii::t('app', 'Image'),
            'image_thumb' => Yii::t('app', 'Image Thumb'),
            'created_date' => Yii::t('app', 'Created Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
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
	
	public function behaviors()
	{
		return [
			[
				'class' => '\yiidreamteam\upload\ImageUploadBehavior',
				'attribute' => 'image',
				'thumbs' => [
					'thumb' => ['width' => 200, 'height' => 100],
				],
				'filePath' => '@webroot/upload/images/clients/image_[[pk]].[[extension]]',
				'fileUrl' => '/upload/images/clients/image_[[pk]].[[extension]]',
				'thumbPath' => '@webroot/upload/images/clients/image_[[profile]]_[[pk]].[[extension]]',
				'thumbUrl' => '/upload/images/clients/image_[[profile]]_[[pk]].[[extension]]',
			],
		];
	}
}
