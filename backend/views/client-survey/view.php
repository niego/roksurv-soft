<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSurvey */

$this->title = $model->client_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Client Surveys'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-survey-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->client_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->client_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'client_id',
            'qa_trans_kwalitas_jalan:boolean',
            'qa_energy_listrik:boolean',
            'qa_water_mng:boolean',
            'qa_equity_to_asset_ratio:boolean',
            'qa_fixed_asset_to_total_equity_ratio:boolean',
            'qn_debt_to_equity_ratio:boolean',
            'qn_long_term_liabilities:boolean',
            'ps_extraversi_sikap_sosial:boolean',
            'ps_agreebleness:boolean',
        ],
    ]) ?>

</div>
