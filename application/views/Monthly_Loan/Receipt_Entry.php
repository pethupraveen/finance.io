<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Waveplus Finance Software</title>
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

	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/jquery-3.1.1.slim.min.js"></script>
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/components_modals.js"></script>
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
				<li><a href="<?=site_url('Principal')?>">Principal Loan</a></li>
				<li><a href="<?=site_url('Monthly_Loan')?>">Monthly Loan</a></li>
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
						<li><a href="<?=site_url('dashboard/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
	<?php include 'inc/sidebar.php'; ?>

	<div class="content-wrapper">
		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Inline form modal -->
				<div id="modal_form_inline" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content text-center">
							<div class="modal-header"></div>
							<form action="<?php echo site_url('Monthly_Loan/Receipt_Entry/'); ?>" class="form-inline" 
							method="POST">
								<div class="modal-body">
									<div class="form-group has-feedback">
										<label>AcNo: </label>
										<input type="text" placeholder="Your AcNo" class="form-control" name="search">
										<div class="form-control-feedback"><i class="icon-user text-muted"></i>
										</div>
									</div>
								</div>
								<div class="modal-footer text-center">
									<button type="submit" name="sbm" value="Search" class="btn btn-primary">Find me <i class="icon-search4"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /inline form modal -->
				

				<form class="form-horizontal" action="<?php echo site_url('Monthly_Loan/Receipt_Entry/'); ?>" method="POST">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Opening Receipt Entry</h5>
							<div class="heading-elements">
								<div class="heading-btn">
									
								<button type="submit" name="sbm" value="Op_Add" class="btn btn-info" ><i class="icon-add position-left"></i> Ok</button>
														
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_form_inline"><i class="icon-search4 position-right"></i> Search </button>

								
								</div>
							</div>
						</div>

						<div class="panel-body">
							<div class="col-md-6">							
								<fieldset>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Date:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Current Date" name="RDate" value="<?php echo date("m/d/Y");?>">
											<?php echo form_error('RCDate', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>	
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Ac.No:</label>
										<div class="col-lg-9">

											<input type="text" class="form-control"  name="AcNo" value="<?php echo $query['AcNo']; ?>" >

											<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
										</div>
									</div>
								</fieldset>
							</div>

								<div class="col-md-6">							
								<fieldset>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Party Name</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Loan Amount" name="PName" value="<?php echo $query['PName']; ?>">

											<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?>	
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Date:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Loan Date" name="MCDate" value="<?php echo $query['MCDate']; ?>">
											<?php echo form_error('MCDate', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
							</fieldset>
									
							</div>				
						</div>
						<div class="panel-body">

							<div class="col-md-6">
								<fieldset>
									<!-------Monthly ------>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="LoanAmount" class="form-control" placeholder="Enter Loan Amount" name="AmountM" value="<?php echo $query['AmountM']; ?>">
											<?php echo form_error('AmountM', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Rec Amt:</label>
										<div class="col-lg-9">
											<input type="text" id="RecAmount" class="form-control" placeholder="Enter Loan Rec Amount" name="RAmount" value="<?php echo $query['RAmount']; ?>">
											<?php echo form_error('RAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Bal Amt:</label>
										<div class="col-lg-9">
											<input type="text" id="BalAmount" class="form-control" placeholder="Enter Loan Balance Amount" name="BAmount" value="<?php echo $query['BAmount']; ?>">
											<?php echo form_error('BAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
						
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Receipt Loan Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="payAmount" class="form-control" placeholder="Enter Receipt Loan Amount" name="RLAmount" value="" onchange="javascript:addNum1();">
											<?php echo form_error('RLAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Particluares:</label>
										<div class="col-lg-9">
											<input type="text" id="Parti" class="form-control" placeholder="Enter Particluares" name="Parti" value="<?php echo $query['Parti']; ?>">
											<?php echo form_error('Parti', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>	
									
								</fieldset>
							</div>
							<div class="col-md-6">
								<fieldset>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Interest Amt:</label>
										<div class="col-lg-9">
											<input type="text" id="In.Amt" class="form-control" placeholder="Enter Interest Amount" name="IAmount" value="<?php echo $query['IAmount']; ?>">
											<?php echo form_error('IAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Interest Rec Amt:</label>
										<div class="col-lg-9">
											<input type="text" id="In.RAmt" class="form-control" placeholder="Enter Interest Rec Amount" name="IRAmount" value="<?php echo $query['IRAmount']; ?>">
											<?php echo form_error('IRAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Interest Bal Amt:</label>
										<div class="col-lg-9">
											<input type="text" id="In.BAmt" class="form-control" placeholder="Enter Interest Balance Amount" name="IBAmount" value="<?php echo $query['IBAmount']; ?>">
											<?php echo form_error('IBAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Receipt Interest Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="R.InAmt" class="form-control" placeholder="Enter Receipt Interest Amount" name="RIAmount" value="" onchange="javascript:addNum2();">
											<?php echo form_error('RIAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

								</fieldset>
							</div>
						</div>
									
					</div>
					<?php echo form_close(); ?>

				</div><!--second panel body-->
			</div>
		</div>
	</div>


</div>
</div>

<?php include 'inc/footer.php'; ?>