<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Client;
use dektrium\user\models\User;

/**
 * ClientSearch represents the model behind the search form about `backend\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * @inheritdoc
     */
	public $user;
    public function rules()
    {
        return [
            [['id', 'user_id', 'kecamatan', 'kabkota', 'propinsi', 'industry_kecamatan', 'industry_kabkota', 'industry_propinsi', 'surveyor_id'], 'integer'],
            [['client_no', 'title', 'nama_lengkap', 'nama_keluarga', 'email', 'alamat', 'kode_pos', 'identitas', 'identitas_no', 'no_hp', 'no_telp', 'fax', 'website', 'note', 'profile_picture', 'company_name', 'entrepeneur', 'sector', 'industry', 'type_industry', 'industry_address', 'industry_kode_pos', 'industry_telp', 'industry_fax', 'created_by', 'created_date', 'updated_date', 'updated_by'], 'safe'],
            [['latitude', 'longitude'], 'number'],
			[['user'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Client::find();
		$query->joinWith(['user']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		$dataProvider->sort->attributes['user'] = [
			'asc' => ['user.username' => SORT_ASC],
			'desc' => ['user.username' => SORT_DESC],
		];
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'kecamatan' => $this->kecamatan,
            'kabkota' => $this->kabkota,
            'propinsi' => $this->propinsi,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'industry_kecamatan' => $this->industry_kecamatan,
            'industry_kabkota' => $this->industry_kabkota,
            'industry_propinsi' => $this->industry_propinsi,
            'surveyor_id' => $this->surveyor_id,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
        ]);

        $query->andFilterWhere(['like', 'client_no', $this->client_no])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'nama_keluarga', $this->nama_keluarga])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'identitas', $this->identitas])
            ->andFilterWhere(['like', 'identitas_no', $this->identitas_no])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'profile_picture', $this->profile_picture])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'entrepeneur', $this->entrepeneur])
            ->andFilterWhere(['like', 'sector', $this->sector])
            ->andFilterWhere(['like', 'industry', $this->industry])
            ->andFilterWhere(['like', 'type_industry', $this->type_industry])
            ->andFilterWhere(['like', 'industry_address', $this->industry_address])
            ->andFilterWhere(['like', 'industry_kode_pos', $this->industry_kode_pos])
            ->andFilterWhere(['like', 'industry_telp', $this->industry_telp])
            ->andFilterWhere(['like', 'industry_fax', $this->industry_fax])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
			->andFilterWhere(['like', 'user.username', $this->user]);
		
        return $dataProvider;
    }
}
