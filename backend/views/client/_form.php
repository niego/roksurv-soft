<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabkota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'propinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identitas')->dropDownList([ 'KTP' => 'KTP', 'KITAS' => 'KITAS', 'PASPOR' => 'PASPOR', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'identitas_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'profile_picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entrepeneur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sector')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'industry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_industry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'industry_kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry_kabkota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry_propinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry_kode_pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surveyor_id')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'updated_date')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
