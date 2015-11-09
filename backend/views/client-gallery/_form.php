<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Client;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model backend\models\ClientGallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-gallery-form">

    <?php $form = ActiveForm::begin([
		'options' => [
			'enctype' => 'multipart/form-data',
		],
	]); ?>

	<?= $form->field($model, 'client_id')->dropDownList(ArrayHelper::map(Client::find()->all(), 'id', 'nama_lengkap'), ['prompt' => '']) ?>
	<?= $form->field($model, 'image')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
