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
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/picker_date.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/datatables.min.js"></script>
	
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/datatables_responsive.js"></script>

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/extensions/select.min.js"></script>


	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/datatables_extension_buttons_print.js"></script>
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
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<form class="form-horizontal" action="<?=site_url('Principal/Receipt_register')?>" method="POST">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Receipt Register</h5>

				<div class="heading-elements">
					<input type="submit" class="btn btn-info" name="sbm" class="btn btn-info" value="Findit">

				</div>
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">From Date:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-calendar22"></i></span>
									<input type="Date" class="form-control" name="SDate" value="">
								</div>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">To Date:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-calendar22"></i></span>
									<input type="Date" class="form-control" name="EDate" value="<?php echo Date('d/m/Y');?>">
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="panel-body">
	
			<table class="table table-togglable table-hover">
				<thead>
					<tr>
						<th data-toggle="true">Ac No</th>
						<th data-hide="phone">Terms</th>
						<th data-hide="phone,tablet">Recipt Date</th>
						<th data-hide="phone,tablet">Party Name</th>
						<th data-hide="phone">Closing Date</th>
						<th class="text-center" style="width: 30px;"><i class="icon-menu-open2"></i></th>
					</tr>
				</thead>
				<tbody>
						<tr>
					<?php 


					foreach($query->result() as $row)
					{
						echo "<td>";
						echo $row->AcNo;
						echo "</td><td>";
						echo $row->Terms;
						echo "</td><td>";
						echo $row->RCDate;
						echo "</td><td>";
						echo $row->Pname;
						echo "</td><td>";
						echo $row->ClDate;
						echo "</td>";
						?>

						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
										<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
										<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
									</ul>
								</li>
							</ul>
						</td>
					</tr>
						<?php
					}

					?>
				</tbody>
			</table>
			</div>
	</div>
	</form>	



</div>



</div>
</div>
<?php include 'inc/footer.php'; ?>