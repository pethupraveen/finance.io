<html>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Deposit Pass Book Print</title>

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
 	 		<h4 class="text-center content-group-lg">Deposit Pass book</h4>
 	 	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table datatable-button-html5-basic">
				<thead>
					<tr>
						<th class="col-sm-1">Date</th>
						<th class="col-sm-1">Particulars</th>
						<th class="col-sm-1">Credit</th>
						<th class="col-sm-1">Debit</th>
						<th class="col-sm-1">Int.Credit</th>
						<th class="col-sm-1">Int.Debit</th>
						
					</tr>
				</thead>
				<tbody>
						<tr>
							<td><?php echo $result['RDate'] ?></td>
							<td></td>
							<td class="price"><?php echo $result['Amount'] ?></td>
							<td></td>
							<td></td>
						</tr>
					<?php foreach ($results as $row ): ?>
						<tr>
						
							<td><?php echo $row['DDate']; ?></td>
							<td><?php echo $row['Parti']; ?></td>
							<td></td>
							<td class="price2"><?php echo $row['DPAmt']; ?></td>
							<td class="price3"><?php echo $row['IAmt']; ?></td>
							<td class="price4"><?php echo $row['RIAmt']; ?></td>
							
						</tr>
					<?php endforeach ?>
						
						<tr>
							<td></td>
							<td>Total --></td>
							<td><div id="grandtotal"></div></td>
							<td><div id="total3"></td>
							<td><div id="grandtotal3"></td>
							<td><div id="grandtotal4"></td>
						</tr>
						<tr>
							<td></td>
							<td>Balance --></td>
							<td><div id="total2"></div></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>A/c.No:<?php echo $result['AcNo'] ?></td>
						</tr>
						<tr>
							<td>Name  :<?php echo $result['PName'] ?></td>
						</tr>
							
				</tbody>
			</table>
		</div>
	</div>

</div>

</div>
<script>
var sum = 0;
$('.price').each(function() {
    sum += parseFloat($(this).text());
});
$('#grandtotal').html(sum)
</script>
<script>
var sum = 0;
$('.price3').each(function() {
    sum += parseFloat($(this).text());
});
$('#grandtotal3').html(sum.toFixed(2))
</script>
<script>
var sum = 0;
$('.price4').each(function() {
    sum += parseFloat($(this).text());
});
$('#grandtotal4').html(sum.toFixed(2))
</script>
<script>
var sum2 = $('.price').text();
var sum = 0;
var sum3 = 0;
$('.price2').each(function() {
  sum += parseFloat($(this).text());
   sum3 = parseFloat(sum2) - parseFloat(sum);
});
$('#total2').html(sum3)
$('#total3').html(sum)
</script>
</body>

</html>
