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
		<h1>Invoices</h1>
		<address>
			<p><?php echo $result['PName']; ?></p>
			<p><?php echo $result['Address']; ?><br><?php echo $result['Address2']; ?></p>
			<p><?php echo $result['country']; ?></p>
			<p><?php echo $result['Phone']; ?></p>
		</address>
		
		
	</header>
</div>

	</body>
</html>