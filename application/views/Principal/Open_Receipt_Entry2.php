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
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/datatables_responsive.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/jquery-3.1.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
	<script language="javascript">
		function addNum1()
		{
			var val1 = parseInt(document.getElementById("LoanAmount").value);
			var val2 = parseInt(document.getElementById("payAmount").value);
			var ansD = document.getElementById("BalAmount");
			ansD.value =  val1 - val2;

			var ansC = document.getElementById("RecAmount");
			ansC.value =  val2;

		}
	</script>


	<div class="content-wrapper">
		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Inline form modal -->
				<div id="modal_form_inline" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content text-center">
							<div class="modal-header">
								
							</div>

							<form action="<?php echo site_url('Principal/Open_Receipt_Search/'); ?>" class="form-inline" 
							method="POST">
								<div class="modal-body">
									<div class="form-group has-feedback">
										<label>AcNo: </label>
										<input type="text" placeholder="Your AcNo" class="form-control" name="AcNo2">
										<div class="form-control-feedback">
											<i class="icon-user text-muted"></i>
										</div>
									</div>

								</div>

								<div class="modal-footer text-center">
									<button type="submit" name="Search" class="btn btn-primary">Find me <i class="icon-search4"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /inline form modal -->
				<!-- Inline form modal -->
				<div id="modal_form_inline2" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content text-center">
							<div class="modal-header">
								
							</div>

							<form action="<?php echo site_url('Principal/Open_Receipt_New/'); ?>" class="form-inline" 
							method="POST">
								<div class="modal-body">
									<div class="form-group has-feedback">
										<label>AcNo: </label>
										<input type="text" placeholder="Your AcNo" class="form-control" name="AcNo2">
										<div class="form-control-feedback">
											<i class="icon-user text-muted"></i>
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

				<form class="form-horizontal" action="<?php echo site_url('Principal/Open_Receipt_Entry/'); ?>" method="POST">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Opening Receipt Entry</h5>
							<div class="heading-elements">
								<button type="submit" name="sbm" value="Op_Add" class="btn btn-info" ><i class="icon-add position-left"></i> Ok</button>
								
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_form_inline"><i class="icon-search4 position-right"></i> Search </button>

								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_form_inline2"><i class="icon-new position-right"></i> New </button>

						</div>
						</div>

						<div class="panel-body">
							<div class="col-md-6">
							
								<fieldset>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Select your Terms:</label>
									<div class="col-lg-9">

										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio1" <?php if($result['Terms'] == 'D' ) { echo 'checked'; } ?> name="Terms" value="Daily"> Daily
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2"  <?php if($result['Terms'] == 'W' ) { echo 'checked'; } ?> name="Terms" value="Weekly" > Weekly
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2" <?php if($result['Terms'] == 'M' ) { echo 'checked'; } ?> name="Terms" value="Monthly" > Monthly
										</label>

									</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Date:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Current Date" name="RCDate" value="<?php echo date("m/d/Y");?>">
											<?php echo form_error('RCDate', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>	
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Ac.No:</label>
										<div class="col-lg-9">

											<input type="text" class="form-control"  name="AcNo" value="<?php echo $result['AcNo'];?>" readonly>

											<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
										</div>
									</div>
								</fieldset>

							</div>
							<div class="col-md-6">
								<fieldset>


								</fieldset>
							</div>




						</div>
						<div class="panel-body">

							<div class="col-md-6">
								<fieldset>
									<!-------Monthly ------>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Party Name</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Loan Amounts" name="Pname" value="<?php echo $result['PName'];?>">

											<?php echo form_error('Pname', '<div class="text-danger">', '</div>'); ?>	
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Date:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Loan Date" name="LDate" value="<?php echo $result['LDate']; ?>">
											<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>


									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="LoanAmount" class="form-control" placeholder="Enter Loan Amount" name="LAmount" value="<?php if($result['Terms'] == 'D' ) { echo $result['Amount']; } if($result['Terms'] == 'W' ) { echo $result['Amount']; } if($result['Terms'] == 'M' ) { echo $result['Amount']; } ?>">
											<?php echo form_error('LAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Rec Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="RecAmount" class="form-control" placeholder="Enter Loan Rec Amount" name="RAmount" value="">
											<?php echo form_error('RAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Bal Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="BalAmount" class="form-control" placeholder="Enter Loan Balance Amount" name="BAmount" value="">
											<?php echo form_error('BAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>



									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Arrear Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="Arrear" class="form-control" placeholder="Enter Arrear Amount" name="AAmount" value="">
											<?php echo form_error('AAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

								</fieldset>
							</div>
							<div class="col-md-6">
								<fieldset>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Mode:</label>
										<div class="col-lg-9">
											<div class="col-lg-10">
												<div class="form-control-static"><?php if($result['Terms'] == 'D' ) { echo "Daily"; } if($result['Terms'] == 'W' ) { echo "Weekly"; } if($result['Terms'] == 'M' ) { echo "Monthly"; } ?></div>
											</div>
											<?php echo form_error('Mode', '<div class="text-danger">', '</div>'); 

											?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-xs-3 control-label">Closing Date:</label>
										<div class="col-xs-9">
											<input type="text" placeholder="Particulars" class="form-control" name="ClDate" 
											value="<?php if($result['Terms'] == 'D' ) { echo $result['Maturity']; } if($result['Terms'] == 'W' ) { echo $result['Maturity']; } if($result['Terms'] == 'M' ) { echo $result['Maturity']; } ?>">

											<?php echo form_error('ClDate', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-xs-3 control-label">Due Amount :</label>
										<div class="col-xs-9">

											<input type="text" id="Due" class="form-control" name="Due" value="<?php echo $result['Due']; ?>" readonly>
											<?php echo form_error('Due', '<div class="text-danger">', '</div>'); ?>
										</div>

									</div>
									<div class="form-group form-group-xs">
										<label class="col-xs-3 control-label">Due Date:</label>
										<div class="col-xs-9">
											<input type="text" placeholder="Due Date" class="form-control" name="DDate" value="<?php if($result['Terms'] == 'D' ) { echo $result['Monthly']; } if($result['Terms'] == 'W' ) { echo $result['Monthly']; } if($result['Terms'] == 'M' ) { echo $result['Monthly']; } ?>">

											<?php echo form_error('DDate', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>



								</fieldset>
							</div>


						</div>
						<div class="panel-body">

							<div class="col-md-6">
								<fieldset>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Receipt Loan Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="payAmount" class="form-control" placeholder="Enter Receipt Loan Amount" name="payAmount" value="" onclick="javascript:addNum1();">
											<?php echo form_error('payAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Particluares:</label>
										<div class="col-lg-9">
											<input type="text" id="Parti" class="form-control" placeholder="Enter Particluares" name="Parti" value="">
											<?php echo form_error('Parti', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>	
								</fieldset>

							</div>
							<div class="col-md-6">
								<fieldset>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Interest Less Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="InLAmount" class="form-control" placeholder="Enter Interest Less Amount" name="InLAmount" value="">
											<?php echo form_error('InLAmount', '<div class="text-danger">', '</div>'); ?>
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