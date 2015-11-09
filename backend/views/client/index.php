<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Clients');
$this->params['breadcrumbs'][] = $this->title;
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
				<p>
					<?= Html::a(Yii::t('app', 'Create Client'), ['create'], ['class' => 'btn btn-success']) ?>
				</p>
				<?php Pjax::begin(['id' => 'pjax-gridview']) ?>
				<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel' => $searchModel,
					'columns' => [
						['class' => 'yii\grid\SerialColumn'],
						'client_no',
						'title',
						[
							'attribute' => 'user',
							'value' => 'user.username'
						],
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
				<?php Pjax::end() ?>
            </div>
        </div>
        </div>
    </div>
</section>