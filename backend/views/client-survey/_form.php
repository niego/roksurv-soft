<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSurvey */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-survey-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client_id')->textInput() ?>

    <?= $form->field($model, 'qa_trans_kwalitas_jalan')->checkbox() ?>

    <?= $form->field($model, 'qa_energy_listrik')->checkbox() ?>

    <?= $form->field($model, 'qa_water_mng')->checkbox() ?>

    <?= $form->field($model, 'qa_equity_to_asset_ratio')->checkbox() ?>

    <?= $form->field($model, 'qa_fixed_asset_to_total_equity_ratio')->checkbox() ?>

    <?= $form->field($model, 'qn_debt_to_equity_ratio')->checkbox() ?>

    <?= $form->field($model, 'qn_long_term_liabilities')->checkbox() ?>

    <?= $form->field($model, 'ps_extraversi_sikap_sosial')->checkbox() ?>

    <?= $form->field($model, 'ps_agreebleness')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
