<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Clickable title -->
	<div class="panel panel-white">
		<div class="panel-heading">
			<h6 class="panel-title">Account Setting</h6>
			
		</div>

		<form class="stepy-no-description" action="<?=site_url('Master/Acc_Setting')?>" method="POST">
			<fieldset title="1">
				<legend class="text-semibold">Principal Loan</legend>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">Daily Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="DPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">int. On Daily Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="IDPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
						
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">Monthly Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="MPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
						
					</div>

					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">int. On Monthly Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="IMPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
						
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">Weekly Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="WPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
						
					</div>
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">int. On Weekly Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="IWPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">HP Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="HPPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>

					
					</div>
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">int. On HP Principal Loan</label>

							<select class="form-control" id="exampleSelect1" name="IHPPL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
					</div>
				</div>
			</fieldset>

			<fieldset title="2">
				<legend class="text-semibold">Tip Up Loan</legend>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">Tip Up Loan</label>

							<select class="form-control" id="exampleSelect1" name="TipupL">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->tip_own;?></option>
								<?php endforeach ?>
							</select>

						</div>
					
					</div>

					<div class="col-md-6">
						<div class="form-group form-group-xs">
								<label class="display-block text-semibold">int. On Tip Up Loan</label>

								<select class="form-control" id="exampleSelect1" name="ITipupL">
									<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
								</select>

							</div>
						
					</div>
				</div>

				
					<div class="row">
						<div class="col-md-6">
							<div class="form-group form-group-xs">
								<label class="display-block text-semibold">Monthly Loan</label>

								<select class="form-control" id="exampleSelect1" name="ML">
									<?php foreach ($query as $row):?> 
										<option><?php echo $row->accName;?></option>
									<?php endforeach ?>
								</select>

							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-xs">
								<label class="display-block text-semibold">int. On Monthly Loan</label>

								<select class="form-control" id="exampleSelect1" name="IML">
									<?php foreach ($query as $row):?> 
										<option><?php echo $row->accName;?></option>
									<?php endforeach ?>
								</select>

							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">Deposit A/C</label>

							<select class="form-control" id="exampleSelect1" name="DAC">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">int. On Deposit</label>

							<select class="form-control" id="exampleSelect1" name="IDE">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">Document Change</label>

							<select class="form-control" id="exampleSelect1" name="DC">
								<?php foreach ($query as $row):?> 
									<option><?php echo $row->accName;?></option>
								<?php endforeach ?>
							</select>

						</div>
					</div>
					<div class="col-md-6">
						
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">int. On Deposit As Expense</label>

							<select class="form-control" id="exampleSelect1" name="IDAC">
								<?php foreach ($query as $row):?> 
								<option><?php echo $row->accName;?></option>
							<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
			</fieldset>

			<fieldset title="3">
				<legend class="text-semibold">Final Account Pattern</legend>

				
				
				<div class="row">
					<div class="col-md-6">	
						<div class="form-group form-group-xs">
							<label class="display-block text-semibold">Account Pattern</label>
							<label class="radio-inline">
								<input type="radio" name="AP" class="styled" value="Credit-Debit">
								Credit - Debit
							</label>

							<label class="radio-inline"> 
								<input type="radio" name="AP" class="styled" value="Debit-Credit" checked="checked">
								Debit - Credit
							</label>
						</div>

					</div>
				</div>
			</fieldset>
			<button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>
		</form>
	</div>
	<!-- /clickable title -->

</div>
<!-- /main content -->



<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/wizards/stepy.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/wizard_stepy.js"></script>
	<!-- /theme JS files -->
<?php  include 'inc/footer.php'; ?>