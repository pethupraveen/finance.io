<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">

	<!-- Main charts -->
	<div class="row">
		<div class="col-lg-12">
			<!-- 2 columns form -->

			<form class="form-horizontal" action="<?php echo site_url('Master/update_balance/'.$r->Code); ?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Acconut Master</h5>
						<div class="heading-elements">
							<button type="submit" class="btn btn-info"><i class="icon-add position-left"></i> Update</button>
							<a class="btn btn-info" href="<?=site_url('Master/openingBalance')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
										
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
											<input type="text" class="form-control" placeholder="Enter account name" name="Name" value="<?php echo $r->Name; ?>">
											<?php echo form_error('Name', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
			

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Opening Balance</label>
										<div class="col-lg-9">
											<input type="text" placeholder="Number Only" class="form-control" name="OpBal" value="<?php echo $r->OpBal; ?>">
											<?php echo form_error('OpBal', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Select your :</label>
										<div class="col-lg-9">
											<label class="form-check-inline">
												<input class="form-check-input" type="radio" id="inlineRadio1" value="D" name="OpBalDC" <?php if($r->OpBalDC == 'D' ) { echo 'checked'; } ?> > Debit
											</label>
											<label class="form-check-inline">
												<input class="form-check-input" type="radio" id="inlineRadio2" value="C" name="OpBalDC" <?php if($r->OpBalDC == 'C' ) { echo 'checked'; } ?> > Credit
											</label>
											<?php echo form_error('OpBalDC', '<div class="text-danger">', '</div>'); ?>
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
<!-- /main content -->
</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

<?php include 'inc/footer.php'; ?>