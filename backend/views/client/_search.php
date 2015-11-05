<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'client_no') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?php // echo $form->field($model, 'nama_keluarga') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'kabkota') ?>

    <?php // echo $form->field($model, 'propinsi') ?>

    <?php // echo $form->field($model, 'kode_pos') ?>

    <?php // echo $form->field($model, 'identitas') ?>

    <?php // echo $form->field($model, 'identitas_no') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'profile_picture') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'entrepeneur') ?>

    <?php // echo $form->field($model, 'sector') ?>

    <?php // echo $form->field($model, 'industry') ?>

    <?php // echo $form->field($model, 'type_industry') ?>

    <?php // echo $form->field($model, 'industry_address') ?>

    <?php // echo $form->field($model, 'industry_kecamatan') ?>

    <?php // echo $form->field($model, 'industry_kabkota') ?>

    <?php // echo $form->field($model, 'industry_propinsi') ?>

    <?php // echo $form->field($model, 'industry_kode_pos') ?>

    <?php // echo $form->field($model, 'industry_telp') ?>

    <?php // echo $form->field($model, 'industry_fax') ?>

    <?php // echo $form->field($model, 'surveyor_id') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
