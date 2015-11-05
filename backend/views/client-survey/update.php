<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSurvey */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Client Survey',
]) . ' ' . $model->client_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Client Surveys'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->client_id, 'url' => ['view', 'id' => $model->client_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="client-survey-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
