<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">

	<!-- Main charts -->
	<div class="row">
		<div class="col-lg-12">
			<!-- 2 columns form -->

			<form class="form-horizontal" action="<?php echo site_url('PartyMaster/update_data/'.$r->id); ?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Area Code Update</h5>
						<div class="heading-elements">
							<button type="submit" class="btn btn-info"><i class="icon-add position-left"></i> Update</button>
							<a class="btn btn-info" href="<?=site_url('PartyMaster/areaCode')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
						</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<fieldset>
									<legend class="text-semibold"><i class="icon-reading position-left"></i> Area details</legend>

									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">City Name:<span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter City name" name="aName" value="<?php echo $r->aName; ?>">
											<?php echo form_error('aName', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Area Code:<span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Area Code" name="aCode" value="<?php echo $r->aCode; ?>">
											<?php echo form_error('aCode', '<div class="text-danger">', '</div>'); ?>
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