<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $client_no
 * @property string $title
 * @property integer $user_id
 * @property string $nama_lengkap
 * @property string $nama_keluarga
 * @property string $email
 * @property string $alamat
 * @property string $kecamatan
 * @property string $kabkota
 * @property string $propinsi
 * @property string $kode_pos
 * @property string $identitas
 * @property string $identitas_no
 * @property string $no_hp
 * @property string $no_telp
 * @property string $fax
 * @property string $website
 * @property string $note
 * @property string $profile_picture
 * @property double $latitude
 * @property double $longitude
 * @property string $company_name
 * @property string $entrepeneur
 * @property string $sector
 * @property string $industry
 * @property string $type_industry
 * @property string $industry_address
 * @property string $industry_kecamatan
 * @property string $industry_kabkota
 * @property string $industry_propinsi
 * @property string $industry_kode_pos
 * @property string $industry_telp
 * @property string $industry_fax
 * @property integer $surveyor_id
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_date
 * @property string $updated_by
 *
 * @property Surveyor $surveyor
 * @property User $user
 * @property ClientGallery[] $clientGalleries
 * @property ClientSurvey $clientSurvey
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'nama_lengkap', 'nama_keluarga', 'email', 'alamat', 'kecamatan', 'kabkota', 'propinsi', 'kode_pos', 'identitas', 'identitas_no', 'no_hp', 'no_telp', 'fax', 'website', 'profile_picture', 'latitude', 'longitude', 'company_name', 'entrepeneur', 'sector', 'industry', 'type_industry', 'industry_address', 'industry_kecamatan', 'industry_kabkota', 'industry_propinsi', 'industry_kode_pos', 'industry_telp'], 'required'],
            [['user_id', 'surveyor_id'], 'integer'],
            [['alamat', 'identitas', 'note', 'sector', 'industry_address'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['created_date', 'updated_date'], 'safe'],
            [['client_no', 'website', 'profile_picture', 'industry_telp', 'industry_fax', 'created_by', 'updated_by'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 5],
            [['nama_lengkap', 'nama_keluarga', 'email', 'kecamatan', 'identitas_no', 'company_name', 'entrepeneur'], 'string', 'max' => 25],
            [['kabkota', 'propinsi', 'industry', 'type_industry', 'industry_kecamatan', 'industry_kabkota', 'industry_propinsi'], 'string', 'max' => 20],
            [['kode_pos', 'industry_kode_pos'], 'string', 'max' => 7],
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
            'client_no' => Yii::t('app', 'Client No'),
            'title' => Yii::t('app', 'Title'),
            'user_id' => Yii::t('app', 'User ID'),
            'nama_lengkap' => Yii::t('app', 'Nama Lengkap'),
            'nama_keluarga' => Yii::t('app', 'Nama Keluarga'),
            'email' => Yii::t('app', 'Email'),
            'alamat' => Yii::t('app', 'Alamat'),
            'kecamatan' => Yii::t('app', 'Kecamatan'),
            'kabkota' => Yii::t('app', 'Kabkota'),
            'propinsi' => Yii::t('app', 'Propinsi'),
            'kode_pos' => Yii::t('app', 'Kode Pos'),
            'identitas' => Yii::t('app', 'Identitas'),
            'identitas_no' => Yii::t('app', 'Identitas No'),
            'no_hp' => Yii::t('app', 'No Hp'),
            'no_telp' => Yii::t('app', 'No Telp'),
            'fax' => Yii::t('app', 'Fax'),
            'website' => Yii::t('app', 'Website'),
            'note' => Yii::t('app', 'Note'),
            'profile_picture' => Yii::t('app', 'Profile Picture'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'company_name' => Yii::t('app', 'Company Name'),
            'entrepeneur' => Yii::t('app', 'Entrepeneur'),
            'sector' => Yii::t('app', 'Sector'),
            'industry' => Yii::t('app', 'Industry'),
            'type_industry' => Yii::t('app', 'Type Industry'),
            'industry_address' => Yii::t('app', 'Industry Address'),
            'industry_kecamatan' => Yii::t('app', 'Industry Kecamatan'),
            'industry_kabkota' => Yii::t('app', 'Industry Kabkota'),
            'industry_propinsi' => Yii::t('app', 'Industry Propinsi'),
            'industry_kode_pos' => Yii::t('app', 'Industry Kode Pos'),
            'industry_telp' => Yii::t('app', 'Industry Telp'),
            'industry_fax' => Yii::t('app', 'Industry Fax'),
            'surveyor_id' => Yii::t('app', 'Surveyor ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_date' => Yii::t('app', 'Created Date'),
            'updated_date' => Yii::t('app', 'Updated Date'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveyor()
    {
        return $this->hasOne(Surveyor::className(), ['id' => 'surveyor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientGalleries()
    {
        return $this->hasMany(ClientGallery::className(), ['client_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientSurvey()
    {
        return $this->hasOne(ClientSurvey::className(), ['client_id' => 'id']);
    }
}
