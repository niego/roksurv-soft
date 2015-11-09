<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Client */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content-header">
    <h1>
      View <?= $model->nama_lengkap ?> 
    </h1>
    
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-users"></i> Client</a></li>
        <li class="active"><a href="#"><i class="fa fa-users"></i> View</a></li>
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
						'user.username',
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
        </div>
        </div>
    </div>
</section>
