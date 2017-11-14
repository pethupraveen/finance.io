<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Main charts -->
	<div class="row">
		<div class="col-lg-12">
			<!-- 2 columns form -->
			<form class="form-horizontal" action="<?=site_url('Monthly_Loan/Payment_register')?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h6 class="panel-title">Monthly Loan <span class="text-muted">Payment Register</span></h6>
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
				
							</div>
						</div>
					<table class="table datatable-responsive datatable-button-print-basic">
						<thead>
							<tr>
								<th>AcNo</th>
								<th>Date</th>
								<th>Party Name</th>
								<th>Amount</th>
								<th>Interst</th>
								<th>Total</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
								<tr>
							<?php foreach ($query as $row) 
								{
								echo "<td>";
								echo $row['AcNo'];
								echo "</td><td>";
								echo $row['MCDate'];
								echo "</td><td>";
								echo $row['PName'];
								echo "</td><td>";
								echo $row['AmountM'];
								echo "</td><td>";
								echo $row['Intrest'].'%';	
								echo "</td><td>";
								echo $row['Total'];
								echo "</td>";
								?>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<li><a target="_blank" href="<?php echo site_url('Monthly_Loan/Payment_Print/'.$row['AcNo']); ?>"><i class=" icon-printer2"></i> Print</a></li>
											<li><a href="<?php echo site_url('Monthly_Loan/Payment_Edit/'.$row['id']); ?>"><i class=" icon-pencil7"></i> Edit</a></li>
											<li><a href="<?php echo site_url('Monthly_Loan/Payment_Delete/'.$row['id']); ?>"><i class="icon-cross2"></i> Remove</a></li>
										</li>
									</ul>
								</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>		
					</div>
					</form>
				
					

					</div>
				

			</div>
			<!-- /main content -->
		</div>
		
	</div>
</div>
</div>
<?php include 'inc/footer.php'; ?>
