<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Client */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-view">

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
            'client_no',
            'title',
            'user_id',
            'nama_lengkap',
            'nama_keluarga',
            'email:email',
            'alamat:ntext',
            'kecamatan',
            'kabkota',
            'propinsi',
            'kode_pos',
            'identitas',
            'identitas_no',
            'no_hp',
            'no_telp',
            'fax',
            'website',
            'note:ntext',
            'profile_picture',
            'latitude',
            'longitude',
            'company_name',
            'entrepeneur',
            'sector:ntext',
            'industry',
            'type_industry',
            'industry_address:ntext',
            'industry_kecamatan',
            'industry_kabkota',
            'industry_propinsi',
            'industry_kode_pos',
            'industry_telp',
            'industry_fax',
            'surveyor_id',
            'created_by',
            'created_date',
            'updated_date',
            'updated_by',
        ],
    ]) ?>

</div>
