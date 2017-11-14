
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Waveplus Softwares</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets') ?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets') ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets') ?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets') ?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets') ?>/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/picker_date.js"></script>
	<!-- /theme JS files -->

</head>

<body class="navbar-bottom navbar-top">
	<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index-2.html"><img src="<?=site_url('assets') ?>/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				<li><a href="<?=site_url('Master')?>">Master</a></li>
				<li><a href="#">Loan Principal</a></li>
				<li><a href="#">Monthly Loan</a></li>
				<li><a href="#">Tip Up Loan</a></li>
				<li><a href="#">Deposit</a></li>
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
						<li><a href="logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard <small>Hello,   <?php echo $username; ?></small></h4>
			</div>

			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-title h6">
							<span>Main navigation</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>


						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Dashboard -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="<?=site_url('Dashboard')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li><a href="<?=site_url('Dashboard/companyMaster')?>"><i class="icon-office"></i>Company Master</a></li>
								<li class="active"><a href="#"><i class="icon-search4"></i> <span>Search</span></a>
									<ul>
										<li><a href="search_basic.html">Basic search results</a></li>
										<li><a href="search_users.html">User search results</a></li>
									</ul>
								</li>
								<li class="active"><a href="changelog.html"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.4</span></span></a></li>
								<li class="active"><a href="#"><i class="icon-spell-check"></i> <span>Editors</span></a>
									<ul>
										<li><a href="#">Editor</a></li>
										<li><a href="#">Calculators</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-lifebuoy"></i> <span>Support</span></a></li>
								<li><a href="#"><i class="icon-book"></i>Exit</a></li>
								<!--/Dashboard-->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>



			<div class="content-wrapper">

				<!-- Main charts -->
				<div class="row">
					<div class="col-lg-12">
						<!-- 2 columns form -->

						<form class="form-horizontal" action="<?=site_url('Dashboard/cMasterEntry')?>" method="POST">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Company Master Entry</h5>
									<div class="heading-elements">
										<button type="submit" class="btn btn-info"><i class="icon-add position-left"></i> Add</button>
										<a class="btn btn-info" href="<?=site_url('Master/accMasterView')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
										<a class="btn btn-info" href="<?=site_url('Master/accMasterDelete')?>"><i class="icon-bin2 position-left"></i> Delete</a>



									</div>
								</div>

								<div class="panel-body">
									<div class="row">
										<div class="col-md-6">
											<fieldset>
												<legend class="text-semibold"><i class="icon-office position-left"></i> Company details</legend>

												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">Company Name:<span class="text-danger">*</span></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" placeholder="Enter Company Name" name="cName" value="<?php echo set_value('cName')?>">
														<?php echo form_error('cName', '<div class="text-danger">', '</div>'); ?>
													</div>
												</div>
												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">Account Year :</label>
													<div class="col-lg-9">
														
															<div class="input-group">
																<span class="input-group-addon"><i class="icon-calendar3"></i></span>
																<input type="text" class="form-control" id="anytime-month-numeric" name="date" value="<?php echo set_value('date')?>">
															</div>
														
													</div>
												</div>
												
												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">TNGST No:</label>
													<div class="col-lg-9">
														<input type="text" placeholder="TNGST No" class="form-control" name="tngst_no" value="<?php echo set_value('tngst_no')?>">
														<?php echo form_error('tngst_no', '<div class="text-danger">', '</div>'); ?>
													</div>

												</div>
												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">C.S.T.NO :</label>
													<div class="col-lg-9">
														<div class="row">
															<div class="col-md-6">
																<input type="text" placeholder="C.S.T.No" class="form-control" name="cst_no" value="<?php echo set_value('cst_no')?>">
																<?php echo form_error('cst_no', '<div class="text-danger">', '</div>'); ?>
															</div>

															<div class="col-md-6">

																<input type="text" placeholder="IT No" class="form-control" name="it_no" value="<?php echo set_value('it_no')?>" >
																<?php echo form_error('it_no', '<div class="text-danger">', '</div>'); ?>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group form-group-md">
													<label class="col-lg-3 control-label">Address:</label>
													<div class="col-lg-9">
														<textarea rows="3" cols="3" class="form-control" placeholder="Enter your address here" name="address" value="<?php echo set_value('address')?>"></textarea>
														<?php echo form_error('address', '<div class="text-danger">', '</div>'); ?>
													</div>
												</div>	

											</fieldset>
										</div>

										<div class="col-md-6">
											<fieldset>
												<legend class="text-semibold"><i class="icon-user position-left"></i> Personal details</legend>
												
												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">City:</label>
													<div class="col-lg-9">
														<input type="text" placeholder="City" class="form-control" name="city" value="<?php echo set_value('city')?>">
														<?php echo form_error('city', '<div class="text-danger">', '</div>'); ?>
													</div>
												</div>
											
												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">Contact :</label>
													<div class="col-lg-9">
														<div class="row">
															<div class="col-md-6">
																<input type="tel" placeholder="Phone" class="form-control mb-15" name="phone" value="<?php echo set_value('phone')?>" >
																<?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
															</div>

															<div class="col-md-6">

																<input type="tel" placeholder="Mobile" class="form-control" name="mobile" value="<?php echo set_value('mobile')?>">
																<?php echo form_error('mobile', '<div class="text-danger">', '</div>'); ?>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">Email:</label>
													<div class="col-lg-9">
														<input type="text" placeholder="mail@gmail.com" class="form-control" name="email" value="<?php echo set_value('email')?>">
														<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
													</div>
												</div>
												<div class="form-group form-group-xs">
													<label class="col-lg-3 control-label">Password:</label>
													<div class="col-lg-9">
														<input type="password" placeholder="password" class="form-control" name="password" value="<?php echo set_value('password')?>">
														<?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
													</div>
												</div>



											</fieldset>
										</div>
									</div>


								</div>
							</div>
							<?php echo form_close(); ?>

						</div><!--second panel body-->


					</div>
				</div>
				<!-- /dashboard content -->
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<?php include 'inc/footer.php'; ?>