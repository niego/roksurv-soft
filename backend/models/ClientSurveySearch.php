<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ClientSurvey;

/**
 * ClientSurveySearch represents the model behind the search form about `backend\models\ClientSurvey`.
 */
class ClientSurveySearch extends ClientSurvey
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id'], 'integer'],
            [['qa_trans_kwalitas_jalan', 'qa_energy_listrik', 'qa_water_mng', 'qa_equity_to_asset_ratio', 'qa_fixed_asset_to_total_equity_ratio', 'qn_debt_to_equity_ratio', 'qn_long_term_liabilities', 'ps_extraversi_sikap_sosial', 'ps_agreebleness'], 'boolean'],
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
        $query = ClientSurvey::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'client_id' => $this->client_id,
            'qa_trans_kwalitas_jalan' => $this->qa_trans_kwalitas_jalan,
            'qa_energy_listrik' => $this->qa_energy_listrik,
            'qa_water_mng' => $this->qa_water_mng,
            'qa_equity_to_asset_ratio' => $this->qa_equity_to_asset_ratio,
            'qa_fixed_asset_to_total_equity_ratio' => $this->qa_fixed_asset_to_total_equity_ratio,
            'qn_debt_to_equity_ratio' => $this->qn_debt_to_equity_ratio,
            'qn_long_term_liabilities' => $this->qn_long_term_liabilities,
            'ps_extraversi_sikap_sosial' => $this->ps_extraversi_sikap_sosial,
            'ps_agreebleness' => $this->ps_agreebleness,
        ]);

        return $dataProvider;
    }
}
