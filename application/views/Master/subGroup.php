<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12">

			<form class="form-horizontal" action="<?=site_url('subGroup/subGroups_entry')?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">subGroup Entry</h5>
						<div class="heading-elements">
							<button type="submit" class="btn btn-info"><i class="icon-add position-left"></i> Add</button>
							<a href="#edit" class="btn bg-info"><i class="icon-spinner4 position-left"></i> Edit</a>
							<a href="#delete" class="btn bg-info"><i class="icon-bin2 position-left"></i> Delete</a>
							
						</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<fieldset>
									<legend class="text-semibold">
										<i class="icon-users4 position-left"></i>Group details</legend>
										<div class="form-group ">
											<label class="col-lg-3 control-label">subGroup Name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter subGroup Name" name="subName" value="">
												<?php echo form_error('subName', '<div class="text-danger">', '</div>'); ?>
											</div>
										</div>
										
										<div class="form-group ">
											<label class="col-lg-3 control-label">Group Name:</label>
											<div class="col-lg-9">
												<select class="form-control" id="exampleSelect1" name="gName">
													<?php 
													foreach ($query as $row) {
														?> 
														<option><?php echo $row->gName;?></option> 
														<?php
													}?>
												</select>
											</div>
										</div>

									</fieldset>
									
								</div>

							</div>

						</div><!--panel body Second End-->
					</div>
				</form>
			</div><!--panel body First End-->

		</div>

	</div>
</div>
</div><!-- /content-wrapper end -->
<?php include 'inc/footer.php'; ?>