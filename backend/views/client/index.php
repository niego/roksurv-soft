<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Clients');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Client'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'client_no',
            'title',
            'user_id',
            'nama_lengkap',
            // 'nama_keluarga',
            // 'email:email',
            // 'alamat:ntext',
            // 'kecamatan',
            // 'kabkota',
            // 'propinsi',
            // 'kode_pos',
            // 'identitas',
            // 'identitas_no',
            // 'no_hp',
            // 'no_telp',
            // 'fax',
            // 'website',
            // 'note:ntext',
            // 'profile_picture',
            // 'latitude',
            // 'longitude',
            // 'company_name',
            // 'entrepeneur',
            // 'sector:ntext',
            // 'industry',
            // 'type_industry',
            // 'industry_address:ntext',
            // 'industry_kecamatan',
            // 'industry_kabkota',
            // 'industry_propinsi',
            // 'industry_kode_pos',
            // 'industry_telp',
            // 'industry_fax',
            // 'surveyor_id',
            // 'created_by',
            // 'created_date',
            // 'updated_date',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
