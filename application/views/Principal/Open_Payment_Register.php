<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
			<!-- Main content -->
			<div class="content-wrapper">
				
				<form class="form-horizontal" action="<?=site_url('Principal/Open_Payment_Register')?>" method="POST">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Opening Payment Register</h5>

							<div class="heading-elements">
								<div class="heading-btn"> 
									<input type="submit" class="btn btn-info" name="sbm" class="btn btn-info" value="Search">
								</div>
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
												<input type="text" class="form-control datepicker-dates" placeholder="Pick a date&hellip;" name="SDate">
											</div>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">To Date:</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input type="text" class="form-control datepicker-dates" placeholder="Pick a date&hellip;" name="EDate">
												
											</div>
											
										</div>
									</div>
									
								</div>
								<table class="table table-responsive table-striped media-library table-lg">
									
									
									<thead>
										<tr>
											<th><input type="checkbox" class="styled"></th>
											<th>AcNo</th>
											<th>Terms</th>
											<th>Date</th>
											<th>Name</th>
											<th>Amount</th>
											<th>No of Due</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($query->result() as $row): ?>
										<tr>
											<td><input type="checkbox" class="styled"></td>
											<td><?php echo $row->AcNo; ?></td>
											<td><?php echo $row->Terms; ?></td>
											<td><?php echo $row->LDate; ?></td>
											<td><?php echo $row->PName; ?></td>
								<td><?php $string = $row->Terms;
								if($string = 'M' || 'W' || 'D') { echo $row->Amount;} ?></td>
								<td><?php $string = $row->Terms;
								if($string = 'M' || 'W' || 'D') { echo $row->Monthly; } ?></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown-bottom">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
									
								</table>
							</div>
						</div>
			

		</div>
		</form>
			

		<!-- /checkbox selection -->
	

			</div>
			<!-- /main content -->
		
	</div>
</div>
</div>
<?php include 'inc/footer.php'; ?>
