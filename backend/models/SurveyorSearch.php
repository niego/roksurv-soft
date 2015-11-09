<?php

namespace backend\models;
use dektrium\user\models\User;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Surveyor;

/**
 * SurveyorSearch represents the model behind the search form about `backend\models\Surveyor`.
 */
class SurveyorSearch extends Surveyor
{
    /**
     * @inheritdoc
     */
	public $user;
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['surveyor_no', 'nama_lengkap', 'email', 'company', 'jenis_kelamin', 'identitas', 'identitas_no', 'no_hp', 'no_telp', 'fax', 'created_by', 'created_date', 'updated_by', 'updated_date'], 'safe'],
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
        $query = Surveyor::find();
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
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
        ]);

        $query->andFilterWhere(['like', 'surveyor_no', $this->surveyor_no])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'identitas', $this->identitas])
            ->andFilterWhere(['like', 'identitas_no', $this->identitas_no])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
			->andFilterWhere(['like', 'user.username', $this->user]);

        return $dataProvider;
    }
}
