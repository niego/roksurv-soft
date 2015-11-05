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
            [['id'], 'required'],
            [['id', 'client_id'], 'integer'],
            [['created_date'], 'safe'],
            [['image', 'image_thumb'], 'string', 'max' => 50]
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
}
