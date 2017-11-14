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
			<!-- 2 columns form --> 
			<form class="form-horizontal" action="<?=site_url('Principal/Open_Payment_update/'.$result['id'])?>" method="POST"> 
				<div class="panel panel-flat"> 
					<div class="panel-heading">
						<h5 class="panel-title"><small>Opening Principal Loan </small> - Opening Payment Update</h5> 
						<div class="heading-elements"> 
							<div class="heading-btn"> 
								<button type="submit" class="btn btn-info" ><i class="icon-check2 position-left"></i> Update</button>
								<a class="btn btn-info" href="<?=site_url('Principal/Open_Payment_View')?>"><i class="icon-archive position-left"></i> View All Data</a>
								<button type="submit" name="First_button" value="First_button" class="btn btn-default" ><i class="icon-first position-left"></i> First</button>
								<button type="submit" name="Previous_button" value="Previous_button" class="btn btn-default" ><i class="icon-previous2 position-left"></i> Prev</button>
								<button type="submit" name="Next_button" value="Next_button" class="btn btn-default" ><i class="icon-next2 position-left"></i> Next</button>
								<button type="submit" name="Last_button" value="Last_button" class="btn btn-default" ><i class="icon-last position-left"></i> Last</button>
							</div> 
						</div> 
					</div> 
					<div class="panel-body">
						<div class="col-md-6">
							<fieldset> 
									<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Select your Terms:</label>
									<div class="col-lg-9">

										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio1" <?php if($result['Terms'] == 'Daily' ) { echo 'checked'; } ?> name="Terms" value="Daily"> Daily
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2"  <?php if($result['Terms']== 'Weekly' ) { echo 'checked'; } ?> name="Terms" value="Weekly" > Weekly
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2" <?php if($result['Terms'] == 'Monthly' ) { echo 'checked'; } ?> name="Terms" value="Monthly" > Monthly
										</label>

									</div>
								</div>
								<div class="form-group form-group-xs"> <label class="col-lg-3 control-label">Date:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Current Date" name="LDate" value="<?php echo $result['LDate'];?>">
										<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?> </div>
									</div>
									
									<div class="form-group form-group-xs"> 
										<label class="col-lg-3 control-label">Ac.No:</label> 
										<div class="col-lg-9"> 
											<input type="text" class="form-control" name="AcNo" id="AcNo2" value="<?php echo $result['AcNo'];?>">
											<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?> 
										</div>
									</div>
									<div id="ans"></div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Party Name</label> 
										<div class="col-lg-9"> 
											<select name="PName" class="form-control has-warning"> 
											
													<option value="<?=$result['PName']?>" <?php echo set_select('PName', $result['PName']); ?>> 
														<?php echo $result['PName'];?></option> 
													</div>
											
											</select>
											<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?> </div> 
										</div>
									
										<div class="form-group form-group-xs">
											<label class="col-lg-3 control-label">Months:</label>
											<div class="col-lg-9">
												<input type="text" id="Months" class="form-control" placeholder="Enter Months name" onkeydown="javascript:myFunction();" onclick="javascript:myFunction();" 
												name="Monthly" value="<?php echo $result['Monthly'];?>">
												<?php echo form_error('Monthly', '<div class="text-danger">', '</div>'); ?>
											</div>
										</div>
										<div class="form-group form-group-xs">
											<label class="col-lg-3 control-label">Amount:</label>
											<div class="col-lg-9">
												<input type="text" id="AmountMonths" class="form-control" onkeydown="javascript:addNum1();"
												placeholder="Enter Amount" name="AmountM" value="<?php echo $result['AmountM'];?>">
												<?php echo form_error('AmountM', '<div class="text-danger">', '</div>'); ?>
											</div>
										</div>
										<div class="form-group form-group-xs">
											<label class="col-lg-3 control-label">Maturity:</label>
											<div class="col-lg-9">
												<input type="text" id="MaturityM" class="form-control" name="MaturityM" value="" />
												<?php echo form_error('MaturityM', '<div class="text-danger">', '</div>'); 

												?>
											</div>
										</div>

								</fieldset>
							</div>
							<div class="col-md-6">
								<fieldset>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label"></label>
										<div class="col-lg-9">


										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Intrest Amount:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Intrest Amount" name="Intrest" value="<?php echo $result['Intrest'];?>">
											<?php echo form_error('Intrest', '<div class="text-danger">', '</div>'); 

											?>

										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Due Amount :</label>
										<div class="col-lg-3">

											<input type="text" id="Due" class="form-control"  name="Due" readonly>
											<?php echo form_error('Due', '<div class="text-danger">', '</div>'); ?>
										</div>
										<label class="col-lg-3 control-label">Collection Amount :</label>
										<div class="col-lg-3">
											<input type="text" id="Colc" class="form-control"  name="Colc" readonly>
											<?php echo form_error('Colc', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Particulars:</label>
										<div class="col-lg-9">
											<input type="text" placeholder="Particulars" class="form-control" name="Parti" value="<?php echo $result['Parti'];?>">

											<?php echo form_error('Parti', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Documnet Amount:</label>
										<div class="col-lg-9">
											<input type="text" placeholder="Documnet Amount" class="form-control" name="DocAmount" value="<?php echo $result['DocAmount'];?>">
											<?php echo form_error('DocAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Documnet Details:</label>
										<div class="col-lg-9">
											<input type="text" placeholder="Documnet Details" class="form-control" name="DocDetail" value="<?php echo $result['DocDetail'];?>">

											<?php echo form_error('DocDetail', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>


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
<script type="text/javascript">
	function GetOptions()
	{
		var e = document.getElementById("ddlOptions");
		var strOptions = e.options[e.selectedIndex].value;
		var ansC = document.getElementById("AcNo");
		ansC.value = strOptions;

	}
</script>
<script language="javascript">
	function addNum1()
	{
		var val1 = parseInt(document.getElementById("AmountMonths").value);
		var val2 = parseInt(document.getElementById("Months").value);
		var ansD = document.getElementById("Due");
		var ansC = document.getElementById("Colc");
		ansD.value =  val1 / val2;
		ansC.value = val1 / val2;
	}
</script>
<script>
	function addNum2()
	{
		var val1 = parseInt(document.getElementById("AmountWeekly").value);
		var val4 = parseInt(document.getElementById("Weekly").value);
		var ansD = document.getElementById("Due");
		var ansC = document.getElementById("Colc");
		ansD.value =  val1 / val4;
		ansC.value = val1 / val4;
	}
</script>
<script>
	function addNum3()
	{
		var val1 = parseInt(document.getElementById("AmountDailly").value);
		var val6 = parseInt(document.getElementById("Dailly").value);
		var ansD = document.getElementById("Due");
		var ansC = document.getElementById("Colc");
		ansD.value =  val1 / val6;
		ansC.value = val1 / val6;
	}
</script>
<script>
	function myFunction() {
		var someDate = new Date();
		var numberOfDaysToAdd = parseInt(document.getElementById("Months").value);
		someDate.setMonth(someDate.getMonth() + numberOfDaysToAdd);
		var dd = someDate.getDate();
		var mm = someDate.getMonth() + 1;
		var y = someDate.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var someFormattedDate = mm + '/'+ dd + '/'+ y; 
		document.getElementById("MaturityM").value = someFormattedDate;
	}
</script>
<script>
	function myFunction2() {
		var someDate = new Date();
		var numberOfDaysToAdd = parseInt(document.getElementById("Weekly").value);
		someDate.setDate(someDate.getDate()+(numberOfDaysToAdd * 7));
		var dd = someDate.getDate();
		var mm = someDate.getMonth()+1;
		var y = someDate.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var someFormattedDate = mm + '/'+ dd + '/'+ y; 
		document.getElementById("MaturityW").value = someFormattedDate;
	}
</script>
<script>
	function myFunction3() {
		var someDate = new Date();
		var numberOfDaysToAdd = parseInt(document.getElementById("Dailly").value);
		someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
		var dd = someDate.getDate();
		var mm = someDate.getMonth()+1;
		var y = someDate.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var someFormattedDate = mm + '/'+ dd + '/'+ y; 
		document.getElementById("MaturityD").value = someFormattedDate;
	}
</script>
<script>
	$(document).ready(function() {
		$("input[name$='Terms']").click(function() {
			var test = $(this).val();
			$("div.desc").hide();
			$("#Cars" + test).show();
		});
	});
</script>


<?php include 'inc/footer.php'; ?>