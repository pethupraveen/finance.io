<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Waveplus Finance Software</title>
	<link rel="shortcut icon" href="<?=site_Url('assets');?>/images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?=site_Url('assets');?>/images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?=site_Url('assets');?>/images/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?=site_Url('assets');?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=site_Url('assets');?>/images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?=site_Url('assets');?>/images/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?=site_Url('assets');?>/images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?=site_Url('assets');?>/images/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?=site_Url('assets');?>/images/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?=site_Url('assets');?>/images/apple-touch-icon-180x180.png" />
	<!-- global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/core/app.js"></script>
	<!-- /core JS files -->
</head>
<body class="navbar-bottom navbar-top">
	<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=site_url('Dashboard')?>"><img src="<?=site_url('assets') ?>/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				<li><a href="<?=site_url('Master')?>">Master</a></li>
				<li><a href="<?=site_url('Principal')?>">Principal Loan</a></li>
				<li><a href="<?=site_url('Monthly_Loan')?>">Monthly Loan</a></li>
				<li><a href="<?=site_url('TipUp_Loan')?>">Tip Up Loan</a></li>
				<li><a href="<?=site_url('Deposit')?>">Deposit</a></li>
				<li><a href="#">Book Keeping</a></li>
				<li><a href="#">Report</a></li>
				<li><a href="#">Final Report</a></li>
				<li><a href="#">Utility</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span><?php echo $username; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="<?=site_url('dashboard/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->