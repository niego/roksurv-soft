<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSurveySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-survey-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'qa_trans_kwalitas_jalan')->checkbox() ?>

    <?= $form->field($model, 'qa_energy_listrik')->checkbox() ?>

    <?= $form->field($model, 'qa_water_mng')->checkbox() ?>

    <?= $form->field($model, 'qa_equity_to_asset_ratio')->checkbox() ?>

    <?php // echo $form->field($model, 'qa_fixed_asset_to_total_equity_ratio')->checkbox() ?>

    <?php // echo $form->field($model, 'qn_debt_to_equity_ratio')->checkbox() ?>

    <?php // echo $form->field($model, 'qn_long_term_liabilities')->checkbox() ?>

    <?php // echo $form->field($model, 'ps_extraversi_sikap_sosial')->checkbox() ?>

    <?php // echo $form->field($model, 'ps_agreebleness')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
