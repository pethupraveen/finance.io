
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
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
<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        var closeButton = document.getElementById("closeButton");
        var title = document.getElementById("title");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        title.style.visibility = 'hidden';
        closeButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
        title.style.visibility = 'visible';
        closeButton.style.visibility = 'visible';
    }
</script>
<style>
	@media print {
	* { -webkit-print-color-adjust: exact; 
		
 }
	html { background: none; padding: 0; margin: auto; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	
}
@page { margin: 0; border: 0; }

</style>

</head>

<body class="layout-boxed navbar-bottom" onload="window.print()">
	<!-- Page container onload="window.print()" -->
	<div class="page-container">

	
			<!-- Main content -->
			<div class="content-wrapper">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<!-- Traffic sources -->
				<div >
				
					<div class="container-fluid">
						
					<div class="panel-body">
								<div class="table-responsive">
									<table class="table datatable-button-html5-basic">
										<thead>
											<tr>
												<th class="col-sm-1">S.No</th>
												<th class="col-sm-1">Loan Date</th>
												<th class="col-sm-1">Party Name</th>
												<th class="col-sm-1">Region </th>
												<th class="col-sm-1">Loan Amount </th>
												<th class="col-sm-1">Interest Amount </th>
												
											</tr>
										</thead>
										<tbody>
											<?php $row_count = 1; ?>
											<?php foreach ($row as $row1 ): ?> 
												<tr>
													<td><?php echo $row_count;?></td>
													<td><?php echo $row1['RDate']; ?></td>
													<td><?php echo $row1['PName']; ?></td>
													<td><?php echo $row1['country']; ?></td>
													<td><?php echo $row1['Amount']; ?></td>
													<td><?php echo $row1['Interest'].'%' ; ?></td>
													
												</tr>
												
											<?php $row_count++; endforeach ?>
										</tbody>
									</table>
								</div>
								
							</div>
						
					</div>
				
				</div>
				<!-- /traffic sources -->
			</div>


			</div>
			<!-- /content area -->

</div>

</body>

</html>
