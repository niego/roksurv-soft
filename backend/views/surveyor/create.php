<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Surveyor */

$this->title = Yii::t('app', 'Create Surveyor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Surveyors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surveyor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
