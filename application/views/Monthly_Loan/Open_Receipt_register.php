<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

<form class="form-horizontal" action="<?=site_url('Monthly_Loan/Open_Receipt_register')?>" method="POST">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h6 class="panel-title">Monthly Loan <span class="text-muted">Opening Receipt Register</span></h6>
			<div class="heading-elements">
				<input type="submit" class="btn btn-info" name="sbm" class="btn btn-info" value="Search">
				
			</div>
		</div>

		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">From Date:</label>
						<div class="col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-calendar22"></i></span>
								<input type="Date" class="form-control" name="SDate" value="">
							</div>
						</div>
					</div>
					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">To Date:</label>
						<div class="col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-calendar22"></i></span>
								<input type="Date" class="form-control" name="EDate" value="">
							</div>
							
						</div>
					</div>
					<div class="form-group form-group-xs">
						<label class="col-lg-6 control-label">Party Name Selection:</label>
						<div class="col-lg-12">
							<div class="multi-select-full">
							<select class="multiselect-full-featured" multiple="multiple" name="PName[]">
								<?php foreach ($PName as $row): ?>
									<option value="<?=$row['PName']?>"><?=$row['PName']?></option>
								<?php endforeach ?>
							</select>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>		
				<!-- Basic initialization -->
		<div class="panel-body">
			<div class="row">
				<table class="table datatable-button-print-basic">
					<thead>
						<tr>
							<th>AcNo</th>
							<th>Date</th>
							<th>Name</th>
							<th>Amount</th>
							<th>Bal.Amt</th>
							<th>Interst</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($query as $row): ?>
						<tr>
							<td><?php echo $row['AcNo']; ?></td>
							<td><?php echo $row['RDate']; ?></td>
							<td><?php echo $row['PName']; ?></td>
							<td><?php echo $row['AmountM']; ?></td>
							<td><?php echo $row['BAmount']; ?></td>
							<td><?php echo $row['IAmount']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
<!-- /basic initialization -->

</form>




</div>
<!-- /main content -->

<?php include 'inc/footer.php'; ?>
