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

<!-- Theme JS files -->
<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>

<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/app.js"></script>
<!-- Theme JS files -->
<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/velocity/velocity.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/velocity/velocity.ui.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/ui/prism.min.js"></script>


<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/animations_velocity_basic.js"></script>
<!-- /theme JS files -->

<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/datatables_basic3.js"></script>
<!-- /theme JS files -->

<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/form_controls_extended.js"></script>
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
		<div class="row">
			<div class="col-lg-12">

				<form class="form-horizontal" action="<?=site_url('PartyMaster/add')?>" method="POST">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Party Master Entry</h5>
							<div class="heading-elements">
								<div class="heading-btn">
									<button type="submit" class="btn bg-slate"><i class="icon-add position-left"></i> Add</button>
									<a href="<?=site_url('PartyMaster/partyMasterView')?>" class="btn bg-info"><i class="icon-pencil5 position-left"></i> Edit</a>
									<a href="<?=site_url('PartyMaster/partyMasterView')?>" class="btn bg-info"><i class="icon-bin position-left"></i> Delete</a>
								</div>
							</div>
						</div>

						<div class="panel-body">
							<div class="row">
							<div class="col-md-10">
									<fieldset>
										<legend class="text-semibold">
											<i class="icon-users4 position-left"></i>Party details</legend>
											<div class="form-group ">
												<label class="col-lg-3 control-label">Party Name:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" placeholder="Enter Party Name" value="<?php echo set_value('PName')?>" name="PName">
												<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?>
												</div>
											</div>

											<div class="form-group form-group-xs">
												<label class="col-lg-3 control-label">Contact:</label>
												<div class="col-lg-9">
													<div class="row">
														<div class="col-md-6">
															<input type="tel" placeholder="Phone" class="form-control mb-15" name="Phone" maxlength="10"  value="<?php echo set_value('Phone')?>">
															<?php echo form_error('Phone', '<div class="text-danger">', '</div>'); ?>
														</div>

														<div class="col-md-6">

															<input type="tel" placeholder="Mobile" class="form-control" name="Mobile" maxlength="10" value="<?php echo set_value('Mobile')?>">
															<?php echo form_error('Mobile', '<div class="text-danger">', '</div>'); ?>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group form-group-xs">
												<label class="col-lg-3 control-label">Address:</label>
												<div class="col-lg-9">
													<div class="row">
														<div class="col-md-6">
															<input type="text" class="form-control" placeholder="Ring street 12" name="Address" value="<?php echo set_value('Address')?>">
														<?php echo form_error('Address', '<div class="text-danger">', '</div>'); ?>	
														</div>

														<div class="col-md-6">
															<input type="text" class="form-control" placeholder="building D, flat #67" name="Address2" value="<?php echo set_value('Address2')?>">
														<?php echo form_error('Address2', '<div class="text-danger">', '</div>'); ?>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group form-group-xs">
												<label class="col-lg-3 control-label">Location:</label>
												<div class="col-lg-9">
													<div class="row">
														<div class="col-md-6">

															<select class="form-control countries" name="City" required>
																<option value="<?php echo set_value('City')?>">--Select Your City--</option>
															</select>
																<?php echo form_error('City', '<div class="text-danger">', '</div>'); ?>

														</div>
														<div class="col-md-6">

															<select class="form-control states" name="Area" required>
																<option value="<?php echo set_value('Area')?>">--Select Your Area--</option>
															</select>
															<?php echo form_error('Area', '<div class="text-danger">', '</div>'); ?>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group form-group-xs">
												<label class="col-lg-3 control-label">ZIP code:</label>
												<div class="col-lg-9">
													<div class="row">
														<div class="col-md-6">

													<input type="text" placeholder="625XXX" maxlength="6" class="form-control" ame="Zipcode" value="<?php echo set_value('Zipcode')?>">
															<?php echo form_error('Zipcode', '<div class="text-danger">', '</div>'); ?>										

														</div>
														<div class="col-md-6">

															
														</div>
													</div>
												</div>
											</div>
											
											
										</fieldset>

									</div>

								</div>

							</div><!--panel body Second End-->
						</div>
					</form>
				</div><!--panel body First End-->

			</div>

		</div>
	</div>

</div><!-- /content-wrapper end -->

</div>
<!-- /page content -->

</div>

<!-- /page container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

/*Get the country list */

$.ajax({
type: "GET",
url: "<?php echo base_url();?>PartyMaster/get_countries",
data:{id:$(this).val()}, 
beforeSend :function(){
$('.countries').find("option:eq(0)").html("Please wait..");
},                         
success: function (data) {
/*get response as json */
$('.countries').find("option:eq(0)").html("Select Your City");
var obj=jQuery.parseJSON(data);
$(obj).each(function()
{
var option = $('<option />');
option.attr('value', this.value).text(this.label);           
$('.countries').append(option);
});  

/*ends */

}
});

/*Get the state list */

$('.countries').change(function(){
$.ajax({
type: "POST",
url: "<?php echo base_url();?>PartyMaster/get_states",
data:{id:$(this).val()}, 
beforeSend :function(){
$(".states option:gt(0)").remove(); 
$(".cities option:gt(0)").remove(); 
$('.states').find("option:eq(0)").html("Please wait..");

},                         
success: function (data) {
/*get response as json */
$('.states').find("option:eq(0)").html("Select Your Area");
var obj=jQuery.parseJSON(data);
$(obj).each(function()
{
var option = $('<option />');
option.attr('value', this.value).text(this.label);           
$('.states').append(option);
});  

/*ends */

}
});
});
});

</script>
<?php include 'inc/footer.php'; ?>