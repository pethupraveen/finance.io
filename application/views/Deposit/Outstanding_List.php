<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<div class="content-wrapper">
	<div class="col-lg-12">
		<!-- 2 columns form -->

		<form class="form-horizontal" action="<?=site_url('Deposit/Pass_Book_Find')?>" target="_blank" method="POST">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Deposit - Outstanding List</h5>
					
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<fieldset>
							
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Ac.No:</label>
								<div class="col-lg-6">
									<div class="form-group has-feedback">
										<input type="text" class="form-control" placeholder="Party AcNo wise Search..." 
										name="AcNo" id="search_data" >
										<div class="form-control-feedback">
											<i class="icon-search4 text-size-base text-muted"></i>
										</div>
										
									</div>
									<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Party Name:</label>
								<div class="col-lg-6">
									<div class="form-group float-label-control" id="select-field">
									    <label for="">Country</label>
									    <select class="form-control" id="country-list">
									        <option value="AU" data-icon="flag-icon flag-icon-au">Austraila</option>
									        <option value="CH" data-icon="flag-icon flag-icon-ch">China</option>
									        <option value="IN" data-icon="flag-icon flag-icon-in">India</option>
									        <option value="PK" data-icon="flag-icon flag-icon-pk">Pakistan</option>
									        <option value="RS" data-icon="flag-icon flag-icon-rs">Russia</option>
									        <option value="AE" data-icon="flag-icon flag-icon-ae">United Arab Emirates</option>
									        <option value="GB" data-icon="flag-icon flag-icon-gb">United Kingdom</option>
									        <option value="US" data-icon="flag-icon flag-icon-us">United States of America</option>
									        <option value="ZM" data-icon="flag-icon flag-icon-zm">Zimbawe</option>
									    </select>
									</div>
								
										
								
									<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
								</div>
							</div>
					

							



						</fieldset>
							<button type="submit" class="btn btn-default"><i class="icon-checkmark4 position-left"></i> OK </button>
							<button type="reset" class="btn btn-default"><i class=" icon-cancel-circle2 position-left"></i> Cancel</button>
					</div>
				
				</div>
			</div>
		</form>
	</div>

</div>

<?php include 'inc/footer.php'; ?>