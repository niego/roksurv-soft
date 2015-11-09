<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Client;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model backend\models\ClientSurvey */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-survey-form">

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client_id')->dropDownList(ArrayHelper::map(Client::find()->all(), 'id', 'nama_lengkap'), ['prompt' => ''])->label('Client') ?>
	
	<?= $form->field($model, 'qa_trans_kwalitas_jalan')->radioList(
			array(
				1 =>'Jalan tanah atau batu dan hanya bisa dilewati oleh kendaraan roda dua.',
				2 =>'Bisa dilewati kendaraan roda empat atau lebih, namun kwalitas buruk seperti: tanah, batu, aspal dengan moyoritas berlubang.',
				3 =>'Hanya bisa dilewati oleh kendaraan roda dua tapi memiliki kwalitas struktur beton dan aspal baik. ',
				4 =>'Bisa dilewati 1 kendaran roda empat, dengan dasar beton atau aspal dengan kwalitas baik.',
				5 =>'Bisa dilewati kendaraan roda empat atau lebih yang berpapasan, serta memiliki struktur beton atau aspal dengan kwalitas baik.',
			)
		)->label('Transportation - KWALITAS JALAN'); 
	?>
	
	<?= $form->field($model, 'qa_energy_listrik')->radioList(
			array(
				1 =>'Tidak tersedia listrik PLN.',
				2 =>'Kwalitas PLN kurang baik (listrik padam lebih dari 1x dalam satu bulan) dan TIDAK tersedia back-up jenset.',
				3 =>'Kwalitas PLN baik (tidak pernah padam kurang dari 1 bulan) TIDAK tersedia back-up jenset',
				4 =>'Kwalitas PLN kurang baik (listrik padam lebih dari 1x dalam satu bulan) dan disertai back-up jenset.',
				5 =>'Kwalitas PLN baik (tidak pernah padam kurang dari 1 bulan) dan disertai back-up pembangkit mandiri (jenset)',
			)
		)->label('Energy - LISTRIK'); 
	?>	
	
	<?= $form->field($model, 'qa_water_mng')->radioList(
			array(
				1 =>'Ketergantungan dengan air PAM dengan kwalitas tidak baik, dan tidak memiliki pengelolaan air limbah yang baik.',
				2 =>'Ketergantungan dari air tanah namun TIDAK memiliki pengelolaan limbah usaha yang baik.',
				3 =>'Kwalitas ketersediaan air PAM TIDAK baik atau TIDAK ADA tapi didukung oleh pengelolaan air tanah yang baik serta pengelolaan air limbah usaha yang baik.',
				4 =>'Ketergantungan hanya terhadap air PAM dengan kwalitas baik dan pengelolaan limbah yang baik.',
				5 =>'Kwalitas ketersediaan air PAM baik dan didukung oleh pengelolaan air tanah yang baik serta pengelolaan air limbah usaha yang baik.',
			)
		)->label('Water Management - AIR'); 
	?>
	
	<?= $form->field($model, 'qa_equity_to_asset_ratio')->radioList(
			array(
				1 =>'0.33 >',
				2 =>'0.40 - 0.33',
				3 =>'0.50 - 0.40',
				4 =>'0.67 - 0.50',
				5 =>'> 0.67',
			)
		)->label('EQUITY TO ASSET RATIO (Equity Ratio). Semakin tinggi ratio semakin baik posisi hutang jangka panjang perusahaan. Semakin rendah, semakin berisiko bagi kreditor terutama saat suku bunga naik.'); 
	?>
	
	<?= $form->field($model, 'qa_fixed_asset_to_total_equity_ratio')->radioList(
			array(
				1 =>'2.50 <',
				2 =>'2.00 - 2.50',
				3 =>'1.00 - 2.00',
				4 =>'0.70 - 1.00',
				5 =>'< 0.70',
			)
		)->label('FIXED ASSETS TO TOTAL EQUITY RATIO'); 
	?>
	
	<?= $form->field($model, 'qn_debt_to_equity_ratio')->radioList(
			array(
				1 =>'2.00 <',
				2 =>'1.50 - 2.00',
				3 =>'0.67 - 1.00',
				4 =>'0.50 - 0.67',
				5 =>'< 0.50',
			)
		)->label('DEBT TO EQUITY RATIO'); 
	?>
	
	<?= $form->field($model, 'qn_long_term_liabilities')->radioList(
			array(
				1 =>'0.25 >',
				2 =>'0.33 - 0.25',
				3 =>'0.50 - 0.33',
				4 =>'0.75 - 0.50',
				5 =>'100 - 0.75',
			)
		)->label('LONG TERM LIABILITIES TO TOTAL LIABILITIES RATIO'); 
	?>
	
	<?= $form->field($model, 'ps_extraversi_sikap_sosial')->radioList(
			array(
				1 =>'SC-1',
				2 =>'SC-2',
				3 =>'SC-3',
				4 =>'SC-4',
				5 =>'SC-5',
			)
		)->label('Ekstraversi terkait dengan sikap sosial, asertif, aktif, ambisi, inisiatif dan ekshibisionis. Sikap ini akan membantu entrepreneur untuk mengexploitasi peluang terutama dalam memperkenalkan ide atau kreasi mereka yang bernilai kepada calon pelanggan, karyawan dan sebagainya. Sikap ini membantu entrepeneur untuk mengkombinasikan dan mengorganisasikan sumber daya dalam kondisi yang tidak menentu.'); 
	?>
	
	<?= $form->field($model, 'ps_agreebleness')->radioList(
			array(
				5 =>'A',
				4 =>'B',
				3 =>'C',
				2 =>'D',
				1 =>'E',
			)
		)->label('Sikap ini terkait dengan keramahan, konformitas sosial, keinginan untuk mempercayai, kerjasama, keinginan untuk memaafkan, toleransi, dan fleksibilitas dengan orang lain. Hal ini akan membantu entrepreneur dalam membangun jarinan kerjasama untuk kematangan bisnisnya terutama aspek dari keinginan untuk mempercayai orang lain. '); 
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
