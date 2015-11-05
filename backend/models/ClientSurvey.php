<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client_survey".
 *
 * @property integer $client_id
 * @property boolean $qa_trans_kwalitas_jalan
 * @property boolean $qa_energy_listrik
 * @property boolean $qa_water_mng
 * @property boolean $qa_equity_to_asset_ratio
 * @property boolean $qa_fixed_asset_to_total_equity_ratio
 * @property boolean $qn_debt_to_equity_ratio
 * @property boolean $qn_long_term_liabilities
 * @property boolean $ps_extraversi_sikap_sosial
 * @property boolean $ps_agreebleness
 *
 * @property Client $client
 */
class ClientSurvey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_survey';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id'], 'required'],
            [['client_id'], 'integer'],
            [['qa_trans_kwalitas_jalan', 'qa_energy_listrik', 'qa_water_mng', 'qa_equity_to_asset_ratio', 'qa_fixed_asset_to_total_equity_ratio', 'qn_debt_to_equity_ratio', 'qn_long_term_liabilities', 'ps_extraversi_sikap_sosial', 'ps_agreebleness'], 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => Yii::t('app', 'Client ID'),
            'qa_trans_kwalitas_jalan' => Yii::t('app', 'Qa Trans Kwalitas Jalan'),
            'qa_energy_listrik' => Yii::t('app', 'Qa Energy Listrik'),
            'qa_water_mng' => Yii::t('app', 'Qa Water Mng'),
            'qa_equity_to_asset_ratio' => Yii::t('app', 'Qa Equity To Asset Ratio'),
            'qa_fixed_asset_to_total_equity_ratio' => Yii::t('app', 'Qa Fixed Asset To Total Equity Ratio'),
            'qn_debt_to_equity_ratio' => Yii::t('app', 'Qn Debt To Equity Ratio'),
            'qn_long_term_liabilities' => Yii::t('app', 'Qn Long Term Liabilities'),
            'ps_extraversi_sikap_sosial' => Yii::t('app', 'Ps Extraversi Sikap Sosial'),
            'ps_agreebleness' => Yii::t('app', 'Ps Agreebleness'),
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
