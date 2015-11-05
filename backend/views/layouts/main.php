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
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?=Yii::getAlias('@web'); ?>/adminlte/dist/css/skins/_all-skins.min.css">
	</head>
	<body class="hold-transition skin-black-light sidebar-mini">
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
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?=Yii::getAlias('@web'); ?>/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">Alexander Pierce</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="<?=Yii::getAlias('@web'); ?>/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
										<p>
											Alexander Pierce - Web Developer
											<small>Member since Nov. 2012</small>
										</p>
									</li>
									<!-- Menu Body -->
									<li class="user-body">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="#" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
			<!-- =============================================== -->
			
			<!-- Left side column. contains the sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel" style="height:60px">
						<div class="pull-left info" style="margin-left:-50px">
							<p>Alexander Pierce</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li><a href="<?php echo Yii::$app->urlManager->createUrl("site/index"); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo Yii::$app->urlManager->createUrl("user/admin"); ?>"><i class="fa fa-user"></i> <span>User Management</span></a></li>
						<li><a href="<?php echo Yii::$app->urlManager->createUrl("client/index"); ?>"><i class="fa fa-users"></i> <span>Client</span></a></li>
						<li><a href="<?php echo Yii::$app->urlManager->createUrl("client-gallery/index"); ?>"><i class="fa fa-file-image-o"></i> <span>Client Gallery</span></a></li>
						<li><a href="<?php echo Yii::$app->urlManager->createUrl("client-survey/index"); ?>"><i class="fa fa-check-square-o"></i> <span>Client Survey</span></a></li>
						<li><a href="<?php echo Yii::$app->urlManager->createUrl("surveyor/index"); ?>"><i class="fa fa-building"></i> <span>Surveyor</span></a></li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			
			<!-- =============================================== -->
			
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
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
