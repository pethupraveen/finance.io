<html>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Waveplus Softwares</title>

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
	<script type="text/javascript" src="<?=site_url('assets');?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/pages/dashboard_boxed.js"></script>
	<!-- /theme JS files -->
<style type="text/css">
@media print {
    #printbtn {
        display :  none;
    }
}
</style>

<style>
	@media print {
	* { -webkit-print-color-adjust: exact; 
		font-size: 12px;
		
 }
	html { background: none; padding: 0; margin: auto; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	
@page { margin: 0; border: 0; }
}

</style>


<body class="layout-boxed navbar-bottom" onload="window.print()">
 <div class="page-container">
 	<div class="content-wrapper">
 	 
 	 	<div class="panel-heading">
 	 		<h4 class="text-center content-group-lg">Monthly Loan Pass book</h4>
 	 	</div>
	<div class="panel-body">
		
		<div class="col-lg-6 col-md-6 col-sm-6">
			<ul class="list-condensed list-unstyled">
				<li> Ac No :  <span class="text-semibold"><?=$result['AcNo']?></span></li>
				<li> Loan Amount :  <span class="text-semibold"><?=$result['AmountM']?></span></li>
				<li> Name :<span class="text-semibold"><?=$result['PName']?></span></li>
			</ul>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 ">
			<div class="invoice-details">
				<ul class="list-condensed list-unstyled">
					<li>Date: <span class="text-semibold"><?=$result['MCDate']?></span></li>
					<li>Closing date: <span class="text-semibold"><?//=$result['ClDate']?></span></li>
				</ul>
			</div>
		</div>

	</div>


	<div class="panel-body">
		<div class="table-responsive">
			<table class="table datatable-button-html5-basic">
				<thead>
					<tr>
						<th class="col-sm-1">Receipt Date</th>
						<th class="col-sm-1">Receipt Amount </th>
						<th class="col-sm-1">Balance Amount</th>
						<th class="col-sm-1">Intrest Amount</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach ($results as $row ): ?> 
						<tr>
							<td><?php echo $row['RDate']; ?></td>
							<td><?php echo $row['RAmount']; ?></td>
							<td><?php echo $row['BAmount']; ?></td>
							<td><?php echo $row['IAmount']; ?></td>
							
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

</div>

</div>	
</body>

</html>
