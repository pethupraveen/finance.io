<html>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TieUp Loan - Payment Register</title>

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
				TieUp Payment Register
				<small class="display-block">Date From:<?php  echo $startdate; ?>  to:<?php echo $enddate;?> </small>
			</h4>
				<div class="table-responsive">
					<table class="table datatable-button-html5-basic">
						<thead>
							<tr>
								
								<th class="col-sm-1">Date</th>
								<th class="col-sm-1">AcNo</th>
								<th class="col-sm-1">Party Name</th>
								<th class="col-sm-1">City</th>
								<th class="col-sm-1">Amount</th>
								<th class="col-sm-1">Docu.Ch</th>
								<th class="col-sm-1">Adv.Int</th>
								<th class="col-sm-1">Day/Due</th>

							</tr>
						</thead>
						<tbody>
							
							<?php foreach ($PName as $row): ?>

								<tr>
									<td><?php echo $row['TDate'];?></td>
									<td><?php echo $row['TAcNo'];?></td>
									<td><?php if($row['TName'] == $row['TName'] ) { echo $row['PName']; } ?></td>
									<td><?php echo $row['country'];?></td>
									<td class="price"><?php echo $row['TAmt'];?></td>
									<td class="TDCh"><?php echo $row['TDCh'];?></td>
									<td class="intr"><?php echo $row['TInAmt'];?></td>
									<td><?php echo $row['TMode'] ."/". $row['TNDue'] ;?></td>
								</tr>

								<?php endforeach ?>
							</tbody>
							<tfoot>
								<td></td>
								<td></td>
								<td>Total</td>
								<td></td>
								<td id="grandtotal"></td>
								<td id="TDCh"></td>
								<td id="intotal"></td>
								<td></td>
							</tfoot>
						</table>
					</div>

				</div>

			</div>

		</div>

	</div>
</div>
</body>
<script>
var sum = 0;
$('.price').each(function() {
    sum += parseFloat($(this).text());
});
$('#grandtotal').html(sum.toFixed(2))
</script>
<script>
var sum = 0;
$('.intr').each(function() {
    sum += parseFloat($(this).text());
});
$('#intotal').html(sum.toFixed(2))
</script>
<script>
var sum = 0;
$('.TDCh').each(function() {
    sum += parseFloat($(this).text());
});
$('#TDCh').html(sum.toFixed(2))
</script>
</html>