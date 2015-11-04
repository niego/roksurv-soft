<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=Yii::getAlias('@web'); ?>/adminlte/dist/css/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=Yii::getAlias('@web'); ?>/adminlte/dist/css/ionicons-2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=Yii::getAlias('@web'); ?>/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=Yii::getAlias('@web'); ?>/adminlte/dist/css/skins/_all-skins.min.css">
    <style>
      .content-wrapper, .right-side, .main-footer {
        margin-left: 0px;
        transition: transform 0.3s ease-in-out 0s, margin 0.3s ease-in-out 0s;
        z-index: 820;
    }
    </style>
  </head>
  <body class="hold-transition skin-black-light sidebar-mini" style="height:100%">
    <?php $this->beginBody() ?>
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Rkt</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Rokatenda</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            </ul>
          </div>
        </nav>
      </header>
      
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="height:100%">
        <?= $content ?>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">Rokatenda</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->
    <!-- SlimScroll -->
    <script src="<?=Yii::getAlias('@web'); ?>/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?=Yii::getAlias('@web'); ?>/adminlte/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=Yii::getAlias('@web'); ?>/adminlte/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=Yii::getAlias('@web'); ?>/adminlte/dist/js/demo.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
