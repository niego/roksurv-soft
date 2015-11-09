<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Surveyor */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Surveyor',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Surveyors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<section class="content-header">
    <h1>
      <?= Html::encode($this->title) ?>
    </h1>
    
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <?= Html::encode($this->title) ?></a></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body width-responsive">
				<?= $this->render('_form', [
					'model' => $model,
				]) ?>
			</div>
        </div>
        </div>
    </div>
</section>

