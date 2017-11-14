
<!DOCTYPE html> 
<html lang ="en"> 
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
	<!-- /global stylesheets --> <!-- Core JS files --> 
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/loaders/pace.min.js"></script> 
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/libraries/jquery.min.js"></script> 
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/libraries/bootstrap.min.js"></script> 
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/loaders/blockui.min.js"></script> 
	<!-- /core JS files -->

	 <script type="text/javascript" src="<?=site_url('assets') ?>/js/core/app.js"></script>
	 <script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/form_controls_extended.js"></script>

<script type="text/javascript" src="<?=site_url('assets') ?>/js/jquery-3.1.1.js"></script>

</head>

<body class="navbar-bottom navbar-top"> 
<!-- Main navbar --> 
	<div class="navbar navbar-inverse navbar-fixed-top"> 
		<div class="navbar-header"> 
			<a class="navbar-brand" href="<?= site_url('Dashboard') ?>"><img src="<?= site_url('assets') ?>/images/logo_light.png" alt=""></a> 
			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a> </li> 
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
			</ul> <ul class="nav navbar-nav navbar-right">
			<li class="dropdown dropdown-user"> <a class="dropdown-toggle" data-toggle="dropdown"> <span><?php echo $username; ?></span> <i class="caret"></i> </a>
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
			<!-- 2 columns form -->
			<form class="form-horizontal" action="<?=site_url('Monthly_Loan/Update_p/'.$id);?>" method="POST">  
				<div class="panel panel-flat"> 
					<div class="panel-heading">
						<h5 class="panel-title">Opening Principal Loan s- <mute>Payment Entry</mute></h5> 
						<div class="heading-elements"> 
							<div class="heading-btn"> 
								<button type="submit" class="btn btn-info" ><i class="icon-loop3 position-left"></i> Update</button>
								<!--<button type="button" class="btn btn-info"  ><i class="icon-new position-left"></i> New</button>-->
								<a class="btn btn-info" href="<?=site_url('Monthly_Loan/Open_Payment_View')?>"><i class="icon-archive position-left"></i> View All Data</a> 
							</div> 
						</div> 
					</div> 
					<div class="panel-body">
						<div class="col-md-6">
							<fieldset> 
								<div class="form-group form-group-xs"> <label class="col-lg-3 control-label">Date:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Current Date" name="MCDate" value="<?php echo $MCDate;?>">
										<?php echo form_error('MCDate', '<div class="text-danger">', '</div>'); ?> </div>
									</div>
								
									<div class="form-group form-group-xs"> 
										<label class="col-lg-3 control-label">Ac.No:</label> 
										<div class="col-lg-9"> 
								
											<input type="text" class="form-control" name="AcNo" value="<?php echo $AcNo;?>">
											<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?> 
										</div>
									</div>
									<div id="ans"></div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Party Name</label> 
										<div class="col-lg-9"> 
										<input type="text" class="form-control" name="PName" value="<?php echo $PName;?>">
									
											<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?> </div> 
										</div>
										<div class="form-group form-group-xs"> 
											<label class="col-lg-3 control-label">Particulars:</label> 
											<div class="col-lg-9"> 
												<input type="text" placeholder="Particulars" class="form-control" name="Parti" value="<?php echo $Parti;?>"> 
												<?php echo form_error('Parti', '<div class="text-danger">', '</div>'); ?> 
											</div>
										</div> 
										<div class="form-group form-group-xs"> 
											<label class="col-lg-3 control-label">Amount:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"	placeholder="Enter Amount" id="amount" type="number" min="1" max="1000000" onchange="computeLoan()" name="AmountM" value="<?php echo $AmountM;?>">
												<?php echo form_error('AmountM', '<div class="text-danger">', '</div>'); ?>
											</div> 
										</div>

									</fieldset> 
								</div>
								<div class="col-md-6">
									<fieldset>
										<div class="form-group form-group-xs"> 
											<label class="col-lg-3 control-label">Docu Charges :</label> 
											<div class="col-lg-9"> 
												<input type="hidden" min="1" max="72" value="1" step="1" id="months">
												<input id="Docu" type="number"  onchange="computeLoan()" class="form-control" name="Docu" value="<?php echo $Docu;?>">
												<?php echo form_error('Docu', '<div class="text-danger">', '</div>'); ?> 
											</div> 
										</div> <div class="form-group form-group-xs"> 
										<label class="col-lg-3 control-label">Intrest Amount: %</label> 
										<div class="col-lg-4"> 
											<input class="form-control" name="Intrest" id="interest_rate" type="number" min="0" max="100" value="<?php echo $Intrest;?>" step=".1" onchange="computeLoan()">
											<?php echo form_error('Intrest', '<div class="text-danger">', '</div>'); ?>
										</div> 
										<div class="col-lg-4"> 

											<input type="text" class="form-control" id="interest" placeholder="Intrest Amount" name="IAmount" value="<?php echo $IAmount; ?>" >

										</div> 
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Adv Intrest Amount:</label> 
										<div class="col-lg-9"> 
											<input class="form-control" placeholder="Enter Advance Intrest Amount" name="AIntrest" id="Ainterest" type="number" value="<?php echo $AIntrest;?>" onchange="computeLoan()"> 
											<?php echo form_error('AIntrest', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div> 
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Documnet Details:</label> 
										<div class="col-lg-9"> 
											<input type="text" placeholder="Documnet Details" class="form-control" name="DocDetail" value="<?php echo $DocDetail;?>"> 
											<?php echo form_error('DocDetail', '<div class="text-danger">', '</div>'); ?> 
										</div>
									</div>
									<input type="hidden" class="form-control" id="payment" name="payment"> 
									<input type="hidden" class="form-control" id="interest" name="IAmount"> 
									<input type="hidden" class="form-control" id="Total" name="Total">

								</fieldset>
							</div> 
						</div> 
					</div> 
					<?php echo form_close(); ?>

					<!--second panel body--> 
				</div> 
			</div> 
		</div> 
	</div> 
</div> 



<?php include 'inc/footer.php'; ?>