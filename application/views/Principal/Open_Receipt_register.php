<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<form class="form-horizontal" action="<?=site_url('Principal/Open_Receipt_reg_check')?>" method="POST">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Opeining Principal Loan <small>Receipt Register</small></h5>

				<div class="heading-elements">
					<input type="submit" class="btn btn-info" name="sbm" class="btn btn-info" value="Findit">

				</div>
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">From Date:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<input type="text" class="form-control datepicker" placeholder="Pick a date&hellip;" name="SDate" required>

									<span class="input-group-addon"><i class="icon-calendar22"></i></span>

								</div>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">To Date:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<input type="text" class="form-control datepicker" placeholder="Pick a date&hellip;" name="EDate" required>
									<span class="input-group-addon"><i class="icon-calendar22"></i></span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>

		</div>
	</form>	
</div>
<?php include 'inc/footer.php'; ?>