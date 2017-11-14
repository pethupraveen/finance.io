
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
		<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/app.js"></script>
	
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
				<li><a href="<?=site_url('Master') ?>">Master</a></li>
				<li><a href="<?=site_url('Principal') ?>">Principal Loan</a></li>
				<li><a href="<?=site_url('Monthly_Loan') ?>">Monthly Loan</a></li>
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
					<span>wave</span>
						<i class="caret"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="http://localhost:8080/CI_FINA/dashboard/logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

<?php include 'inc/sidebar.php'; ?>

<div class="content-wrapper">

		<div class="col-lg-12">
			<!-- 2 columns form -->

			<form class="form-horizontal" action="<?=site_url('Principal/Pass_Book_Find')?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Principal Loan - Pass Book</h5>
						
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<fieldset>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Select your Terms:</label>
									<div class="col-lg-9">
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio1" name="Terms" value="Daily"> Daily
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2"  name="Terms" value="Weekly" > Weekly
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio3" name="Terms" checked="checked" value="Monthly" > Monthly
										</label>
										<?php echo form_error('Terms', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Ac.No:</label>
									<div class="col-lg-9">
										<div class="form-group has-feedback">
											<input type="text" class="form-control" placeholder="Party AcNo wise Search..." name="search_data" id="search_data" >
											<div class="form-control-feedback">
												<i class="icon-search4 text-size-base text-muted"></i>
											</div>
											
										</div>

									
										
										<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
									</div>
								</div>
							
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Party Name</label>
									<div class="col-lg-9">
									
										<select name="PName" class="form-control has-warning"> 
												<option value="">Party Name wise Search</option>
											<?php foreach ($PName as $row ): ?>
												<option value="<?=$row['PName']?>" <?php echo set_select('PName', $row['PName']); ?>> 
													<?php echo $row['PName'];?></option> 
												
											<?php endforeach; ?>
										</select>
								


									</div>
								</div>
								


								<button type="submit" class="btn btn-default"><i class="icon-checkmark4 position-left"></i> OK </button>
								<button type="reset" class="btn btn-default"><i class=" icon-cancel-circle2 position-left"></i> Cancel</button>

							</fieldset>
						</div>
					</div>
				</div>
			</form>
		</div>

</div>



</div></div>
<?php include 'inc/footer.php'; ?>