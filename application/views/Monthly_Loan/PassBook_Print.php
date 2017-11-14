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
		<h1>Monthly Loan - Pass Book</h1>
		<hr>
		<address>
			<p>Ac No : <?=$result['AcNo']?></p>
			<p>Loan Amount : <?=$result['LAmount']?></p>
		   <p>Name : <?=$result['PName']?></p>
			
		</address>
		<div class="text-align">
			
		<address>
			<p><span>Date: <?=$result['LDate']?></span></p>
			<p><span>Closing date: <?=$result['LAmount']?></span></p>
				
		</address>
		</div>
		
		
	</header>
			<table class="custom">
				<thead>
					<tr>
						<th>Receipt Date</th>
						<th>Receipt Amount </th>
						<th>Balance Amount</th>
						<th>Loan Amount</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($results as $row ): ?> 
					<tr>
						<td><?php echo $row['RDate']; ?></td>
						<td><?php echo $row['RAmount']; ?></td>
						<td><?php echo $row['BAmount']; ?></td>
						<td><?php echo $row['LAmount']; ?></td>
					</tr>
				<?php endforeach ?>
			    </tbody>
		    </table>

 </div>
	</body>
</html>