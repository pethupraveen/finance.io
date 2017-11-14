<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="<?=site_url('assets'); ?>\style.css">
		<script src="<?=site_url('assets'); ?>\script.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="<?=site_url('assets')?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<script type="text/javascript">
	 setTimeout(function () { window.print(); }, 500);
        window.onfocus = function () { setTimeout(function () { window.close(); }, 500); }
	</script>
		
		<div id="receipt">
	<header>
		<h1>Principal Loan - Pass Book</h1>
		<hr>
		<address>
			<p>Ac No : <?=$rows['AcNo']?></p>
			<p>Loan Amount : <?=$rows['Amount']?></p>
		   <p>Name :<?=$rows['PName']?></p>
			
		</address>
		<div class="text-align">
			
		<address>
			<p><span>Date:<?php echo date("M d, Y");?></span></p>
			<p><span>Closing date: <?=$rows['Maturity']?></span></p>
				
		</address>
		</div>
		
		
	</header>
			<table class="custom">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Receipt Date</th>
						<th>Receipt Amount </th>
						<th>Balance Amount</th>
						<th>Loan Amount</th>
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
	</body>
</html>