<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClientSurveySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Client Surveys');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-survey-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Client Survey'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'client_id',
            'qa_trans_kwalitas_jalan:boolean',
            'qa_energy_listrik:boolean',
            'qa_water_mng:boolean',
            'qa_equity_to_asset_ratio:boolean',
            // 'qa_fixed_asset_to_total_equity_ratio:boolean',
            // 'qn_debt_to_equity_ratio:boolean',
            // 'qn_long_term_liabilities:boolean',
            // 'ps_extraversi_sikap_sosial:boolean',
            // 'ps_agreebleness:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
