<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ClientGallery;

/**
 * ClientGallerySearch represents the model behind the search form about `backend\models\ClientGallery`.
 */
class ClientGallerySearch extends ClientGallery
{
    /**
     * @inheritdoc
     */
	public $client;
    public function rules()
    {
        return [
            [['id', 'client_id'], 'integer'],
            [['image', 'image_thumb', 'created_date'], 'safe'],
			[['client'], 'safe'],
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
        $query = ClientGallery::find();
		$query->joinWith(['client']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		$dataProvider->sort->attributes['client'] = [
			'asc' => ['client.nama_lengkap' => SORT_ASC],
			'desc' => ['client.nama_lengkap' => SORT_DESC],
		];
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'client_id' => $this->client_id,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'image_thumb', $this->image_thumb])
			->andFilterWhere(['like', 'client.nama_lengkap', $this->client]);

        return $dataProvider;
    }
}
