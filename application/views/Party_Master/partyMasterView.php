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
	<link href="<?=site_url('assets')?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets')?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets')?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets')?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets')?>/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?=site_url('assets')?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/datatables_responsive.js"></script>

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
						<li><a href="<?=site_url('dashboard/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h5 class="panel-title">Party Master View</h5>
			<div class="heading-elements">
				
				<a class="btn btn-info" href="<?=site_url('PartyMaster/partyMasterView')?>"><i class="icon-book3 position-left"></i> View All</a>
				<a class="btn bg-slate btn-sm" href="<?=site_url('PartyMaster/index')?>"> New Party Entry <i class="icon-file-plus position-right"></i></a>


			</div>
		</div>

		
		<table class="table datatable-responsive">
			<thead>
				<tr>
					<th>Party Name</th>
					<th>Contact</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>City</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				foreach($query->result() as $row)
				{
					echo "<tr>";
					echo "<td>";
					echo $row->PName;
					echo "</td><td>";
					echo $row->Phone;
					echo "</td><td>";
					echo $row->Mobile;
					echo "</td><td>";
					echo $row->Address;
					echo "</td><td>";
					echo $row->City;
					echo "</td><td>";
					echo "<a href='".site_url('PartyMaster/partyMasterEdit/' .$row->id)."'>Edit</a>
					|<a href='".site_url('PartyMaster/partyMasterDelete/' .$row->id)."'>Delete</a>";
					echo "</td>";
					echo "</tr>";
				}

				?>
			</tbody>
		</table>

	</div>
	<!-- /basic datatable -->

</div>

	

</div>
</div>

<?php include 'inc/footer.php'; ?>