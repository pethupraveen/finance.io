
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Arrear List Print</title>

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
		font-size: 12px;
		
	}
	html { background: none; padding: 0; margin: auto; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	
}
@page { margin: 0; border: 0; }

</style>


<body class="layout-boxed navbar-bottom" onload="window.print()">
	<!-- Page container onload="window.print()" -->
	<div class="page-container">

		<div class="content-wrapper">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="container-fluid">
					<div class="panel-body">
						<h4 class="text-center content-group-lg">
							Arrear List Print
							<small class="display-block">Date From:<?php//  echo $startdate; ?>  to:<?php// echo $enddate;?> </small>
						</h4>
						<div class="table-responsive">
						
							<table class="table datatable-button-html5-basic">
								<thead>
									<tr>
										<th>AcNo</th>
										<th>Name</th>
										<th>Loan Date</th>
										<th>Bal.Amt</th>
										<th>Due.Amt</th>
										<th>Due</th>
										<th>Arr.Amt</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($query as $row): ?>
									<tr>
										<?php if ($row['BAmount'] != 0): ?>
											
										<td><?=$row['AcNo']; ?></td>
										<td><?=$row['PName']; ?></td>
										<td><?=$row['LDate']; ?></td>
										<td><?=$row['BAmount']; ?></td>
										<td><?=$row['Due']; ?></td>
										<td><?=$row['Monthly']; ?></td>
										<td><?=$row['AAmount']; ?></td>
										<?php endif ?>
									</tr>
								<?php endforeach; ?>
								</tbody>

							</table>
						</div>

					</div>

				</div>

			</div>

		</div>
	</div>
</body>

</html>