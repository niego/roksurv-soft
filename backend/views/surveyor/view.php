<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Surveyor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Surveyors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surveyor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'user_id',
            'surveyor_no',
            'nama_lengkap',
            'email:email',
            'company',
            'jenis_kelamin',
            'identitas',
            'identitas_no',
            'no_hp',
            'no_telp',
            'fax',
            'created_by',
            'created_date',
            'updated_by',
            'updated_date',
        ],
    ]) ?>

</div>
