
<div class="content-wrapper">

	<!-- Main charts -->
	<div class="row">
		<div class="col-lg-12">
			<!-- 2 columns form -->

			<form class="form-horizontal" action="<?=site_url('Master/accMasterEntry')?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Acconut Master Entry</h5>
						<div class="heading-elements">
							<button type="submit" class="btn btn-info" data-layout="topRight" data-type="success"><i class="icon-add position-left"></i> Add</button>
							<a class="btn btn-info" href="<?=site_url('Master/accMasterView')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
							<a class="btn btn-info" href="<?=site_url('Master/accMasterDelete')?>"><i class="icon-bin2 position-left"></i> Delete</a>
							
							
							
						</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<fieldset>
									<legend class="text-semibold"><i class="icon-reading position-left"></i> Account details</legend>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Account Name:<span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter account name" name="accName" value="<?php echo set_value('accName')?>">
											<?php echo form_error('accName', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Sub Group Under</label>
										<div class="col-lg-9">
											<select class="form-control" id="exampleSelect1" name="subName" >
												<?php 
													foreach ($query as $row) {
														?> 
														<option><?php echo $row->subName;?></option> 
														<?php
													}?>
												<?php echo form_error('subGroup', '<div class="text-danger">', '</div>'); ?>		
											</select>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Select your :</label>
										<div class="col-lg-9">
											<label class="form-check-inline">
												<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Tie Up" name="tip_own" > Tie Up
											</label>
											<label class="form-check-inline">
												<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Owner" name="tip_own"> Owner
											</label>
											<?php echo form_error('tip_own', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Opening Balance</label>
										<div class="col-lg-9">
											<input type="text" placeholder="Number Only" class="form-control" name="open_balan" value="<?php echo set_value('open_balan')?>">
											<?php echo form_error('open_balan', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Select your :</label>
										<div class="col-lg-9">
											<label class="form-check-inline">
												<input class="form-check-input" type="radio" id="inlineRadio1" value="<?php echo set_value('debit_cridit','Debit')?>" name="debit_cridit"> Debit
											</label>
											<label class="form-check-inline">
												<input class="form-check-input" type="radio" id="inlineRadio2" value="<?php echo set_value('debit_cridit','Credit')?>" name="debit_cridit" > Credit
											</label>
											<?php echo form_error('debit_cridit', '<div class="text-danger">', '</div>'); ?>

										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">TIN No:</label>
										<div class="col-lg-9">
											<input type="text" placeholder="TIN No" class="form-control" name="tin_no" value="<?php echo set_value('tin_no')?>">
											<?php echo form_error('tin_no', '<div class="text-danger">', '</div>'); ?>
										</div>

									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">C.S.T.NO :</label>
										<div class="col-lg-9">
											<div class="row">
												<div class="col-md-6">
													<input type="text" placeholder="C.S.T.No" class="form-control" name="cst_no" value="<?php echo set_value('cst_no')?>">
													<?php echo form_error('cst_no', '<div class="text-danger">', '</div>'); ?>
												</div>

												<div class="col-md-6">

													<input type="text" placeholder="PAN No" class="form-control" name="pan_no" value="<?php echo set_value('pan_no')?>" >
													<?php echo form_error('pan_no', '<div class="text-danger">', '</div>'); ?>
												</div>
											</div>
										</div>
									</div>

								</fieldset>
							</div>

							<div class="col-md-6">
								<fieldset>
									<legend class="text-semibold"><i class="icon-user position-left"></i> Personal details</legend>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Your name:</label>
										<div class="col-lg-9">
											<input type="text" placeholder="Your name" class="form-control" name="name" value="<?php echo set_value('name')?>">
											<?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Email:</label>
										<div class="col-lg-9">
											<input type="text" placeholder="mail@gmail.com" class="form-control" name="email" value="<?php echo set_value('email')?>">
											<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Contact :</label>
										<div class="col-lg-9">
											<div class="row">
												<div class="col-md-6">
													<input type="tel" placeholder="Phone" class="form-control mb-15" name="phone" value="<?php echo set_value('phone')?>" >
													<?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
												</div>

												<div class="col-md-6">

													<input type="tel" placeholder="Mobile" class="form-control" name="mobile" value="<?php echo set_value('mobile')?>">
													<?php echo form_error('mobile', '<div class="text-danger">', '</div>'); ?>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group form-group-md">
										<label class="col-lg-3 control-label">Address</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter your address here" name="address" value="<?php echo set_value('address');?>">
											<?php echo form_error('address', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Location:</label>
										<div class="col-lg-9">
											<div class="row">
												<div class="col-md-6">
													<input type="text" placeholder="State/Tamilnadu" class="form-control" name="state" value="<?php echo set_value('state')?>">
													<?php echo form_error('state', '<div class="text-danger">', '</div>'); ?>
													<input type="text" placeholder="Zipcode" class="form-control" name="zipcode" value="<?php echo set_value('zipcode')?>">
													<?php echo form_error('zipcode', '<div class="text-danger">', '</div>'); ?>
												</div>

												<div class="col-md-6">
													<input type="text" placeholder="City" class="form-control" name="city" value="<?php echo set_value('city')?>">
													<?php echo form_error('city', '<div class="text-danger">', '</div>'); ?>
												</div>
											</div>
										</div>
									</div>

									
								</fieldset>
							</div>
						</div>


					</div>
				</div>
				<?php echo form_close(); ?>

			</div><!--second panel body-->


		</div>
	</div>
	<!-- /dashboard content -->
</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

<?php include 'inc/footer.php'; ?>