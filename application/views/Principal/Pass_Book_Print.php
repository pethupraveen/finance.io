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
	<link href="<?=site_url('assets');?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="<?=site_url('assets');?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/pages/dashboard_boxed.js"></script>
	<!-- /theme JS files -->

</head>

<body class="layout-boxed navbar-bottom">
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h6 class="panel-title">Principal Loan -- Pass Book</h6>
						<div class="heading-elements">
							<div class="heading-btn">
								<a type="button" href="<?=site_url('Principal\Pass_book')?>" class="btn btn-default btn-xs heading-btn"><i class="icon-cross2 position-left"></i> Close</a>
								<a target="_blank" href="<?=site_url('Principal\PassBook_Print/'.$rows['AcNo'].'/'.$rows['PName']);?>" class="btn btn-default btn-xs heading-btn"><i class="icon-printer2 position-left"></i>Print</a>

							</div>
						</div>
					</div>

					<div class="container-fluid">
						<div class="row">
							<div class="panel-body">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<ul class="list-condensed list-unstyled">
										<li> Ac No :  <span class="text-semibold"><?=$rows['AcNo']?></span></li>
										<li> Loan Amount :  <span class="text-semibold"><?=$rows['Amount']?></span></li>
										<li> Name :<span class="text-semibold"><?=$rows['PName']?></span></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="invoice-details">
										<ul class="list-condensed list-unstyled">
											<li>Date: <span class="text-semibold"><?php echo date("M d, Y");?></span></li>
											<li>Closing date: <span class="text-semibold"><?=$rows['Maturity']?></span></li><li>No of Due: <span class="text-semibold"><?=$rows['Monthly']?></span></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table datatable-button-html5-basic">
										<thead>
											<tr>
												<th class="col-sm-1">S.No</th>
												<th class="col-sm-1">Receipt Date</th>
												<th class="col-sm-1">Receipt Amount </th>
												<th class="col-sm-1">Balance Amount</th>
												<th class="col-sm-1">Loan Amount</th>
											</tr>
										</thead>
										<tbody>
											<?php $row_count = 1; ?>
											<?php foreach ($result as $row ): ?> 
												<tr>
													<td><?php echo $row_count;?></td>
													<td><?php echo $row['RCDate']; ?></td>
													<td><?php echo $row['payAmount']; ?></td>
													<td><?php echo $row['BAmount']; ?></td>
													<td><?php echo $row['Amount']; ?></td>
												</tr>
												
											<?php $row_count++; endforeach ?>
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
					</div>
				
				</div>
				<!-- /traffic sources -->
			</div>


			</div>
			<!-- /content area -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


</body>

</html>
