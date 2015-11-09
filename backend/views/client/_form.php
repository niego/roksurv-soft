<?php
	
	use yii\helpers\Html;
	use kartik\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
	use dektrium\user\models\User;
	use backend\models\Lokasi;
	use backend\models\Surveyor;
	use kartik\widgets\DepDrop;
	use yii\helpers\Url;
	/* @var $this yii\web\View */
	/* @var $model backend\models\Client */
	/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">
	
    <?php $form = ActiveForm::begin(); ?>
	
    <?= $form->field($model, 'client_no')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'user_id')->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'username'), ['prompt' => '']) ?>
	
    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'nama_keluarga')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>
	
	<?= $form->field($model, 'propinsi')->dropDownList(ArrayHelper::map(Lokasi::find()->where('kabupaten_kota = :kabkota', [':kabkota' => 00])->all(), 'id', 'nama'), ['prompt' => '']) ?>
	<?php
		if($model->isNewRecord == true){
			echo $form->field($model, 'kabkota')->widget(DepDrop::classname(), [
				'pluginOptions'=>[
					'depends'=>['client-propinsi'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kab-kota'])
				]
			]);
			 
			echo $form->field($model, 'kecamatan')->widget(DepDrop::classname(), [
				'pluginOptions'=>[
					'depends'=>['client-kabkota'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kecamatan'])
				]
			]);
		}else{
			echo $form->field($model, 'kabkota')->widget(DepDrop::classname(), [
				'data'=>ArrayHelper::map(Lokasi::find()->where('id = :id', [':id' => $model->kabkota])->all(), 'id', 'nama'),
				'pluginOptions'=>[
					'depends'=>['client-propinsi'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kab-kota'])
				]
			]);
			 
			echo $form->field($model, 'kecamatan')->widget(DepDrop::classname(), [
				'data'=>ArrayHelper::map(Lokasi::find()->where('id = :id', [':id' => $model->kecamatan])->all(), 'id', 'nama'),
				'pluginOptions'=>[
					'depends'=>['client-kabkota'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kecamatan'])
				]
			]);
		}
	?>
	
    <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'identitas')->dropDownList([ 'KTP' => 'KTP', 'KITAS' => 'KITAS', 'PASPOR' => 'PASPOR', ], ['prompt' => '']) ?>
	
    <?= $form->field($model, 'identitas_no')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
	<?php if($model->isNewRecord == true){?>
	<div id="map" style="height:200px;"></div>
    <?php } ?>
    <?= $form->field($model, 'latitude')->textInput(['readonly' => true]) ?>
	
    <?= $form->field($model, 'longitude')->textInput(['readonly' => true]) ?>
	
    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'entrepeneur')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'sector')->textarea(['rows' => 6]) ?>
	
    <?= $form->field($model, 'industry')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'type_industry')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'industry_address')->textarea(['rows' => 6]) ?>
	
	<?= $form->field($model, 'industry_propinsi')->dropDownList(ArrayHelper::map(Lokasi::find()->where('kabupaten_kota = :kabkota', [':kabkota' => 00])->all(), 'id', 'nama'), ['prompt' => '']) ?>
	<?php
		if($model->isNewRecord == true){
			echo $form->field($model, 'industry_kabkota')->widget(DepDrop::classname(), [
				'pluginOptions'=>[
					'depends'=>['client-industry_propinsi'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kab-kota'])
				]
			]);
			 
			echo $form->field($model, 'industry_kecamatan')->widget(DepDrop::classname(), [
				'pluginOptions'=>[
					'depends'=>['client-industry_kabkota'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kecamatan'])
				]
			]);
		}else{
			echo $form->field($model, 'industry_kabkota')->widget(DepDrop::classname(), [
				'data'=>ArrayHelper::map(Lokasi::find()->where('id = :id', [':id' => $model->industry_kabkota])->all(), 'id', 'nama'),
				'pluginOptions'=>[
					'depends'=>['client-industry_propinsi'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kab-kota'])
				]
			]);
			 
			echo $form->field($model, 'industry_kecamatan')->widget(DepDrop::classname(), [
				'data'=>ArrayHelper::map(Lokasi::find()->where('id = :id', [':id' => $model->industry_kecamatan])->all(), 'id', 'nama'),
				'pluginOptions'=>[
					'depends'=>['client-industry_kabkota'],
					'placeholder'=>'Select...',
					'url'=>Url::to(['/site/get-kecamatan'])
				]
			]);
		}
	?>
	
    <?= $form->field($model, 'industry_kode_pos')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'industry_telp')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'industry_fax')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'surveyor_id')->dropDownList(ArrayHelper::map(Surveyor::find()->all(), 'id', 'nama_lengkap'), ['prompt' => '']) ?>
	
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
	
    <?php ActiveForm::end(); ?>
	
</div>
<?php 
	if($model->isNewRecord == true){
?>
<script>
	function initMap() {
		var map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -34.397, lng: 150.644},
			zoom: 6
		});
		var infoWindow = new google.maps.InfoWindow({map: map});
		
		// Try HTML5 geolocation.
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
				$('#client-latitude').val(position.coords.latitude);
				$('#client-longitude').val(position.coords.longitude);
				infoWindow.setPosition(pos);
				infoWindow.setContent('My Location.');
				map.setCenter(pos);
				}, function() {
				handleLocationError(true, infoWindow, map.getCenter());
			});
			} else {
			// Browser doesn't support Geolocation
			handleLocationError(false, infoWindow, map.getCenter());
		}
	}
	
	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		infoWindow.setPosition(pos);
		infoWindow.setContent(browserHasGeolocation ?
		'Error: The Geolocation service failed.' :
		'Error: Your browser doesn\'t support geolocation.');
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS6we34c7JSeZHHCvIdUjgNnhblNJ0rKc&callback=initMap" async defer></script>
<?php 
	}
?>