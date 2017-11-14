<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<div class="content-wrapper">
	<div class="col-lg-12">
		<!-- 2 columns form -->

		<form class="form-horizontal" action="<?=site_url('Deposit/Pass_Book_Find')?>" target="_blank" method="POST">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Deposit - Pass Book</h5>
					<div class="heading-elements">
						<div class="heading-btn">
							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<fieldset>
							
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Ac.No:</label>
								<div class="col-lg-9">
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
								<label class="col-lg-3 control-label">Party Name</label>
								<div class="col-lg-9">
									
									<select name="PName" class="form-control has-warning"> 
										<option value="">Party Name wise Search</option>
										<?php foreach ($result as $row ): ?>
											<option value="<?=$row['PName']?>"><?=$row['PName'];?></option> 
										<?php endforeach; ?>
									</select>
									


								</div>
							</div>
							


							<button type="submit" class="btn btn-default"><i class="icon-checkmark4 position-left"></i> OK </button>
							<button type="reset" class="btn btn-default"><i class=" icon-cancel-circle2 position-left"></i> Cancel</button>

						</fieldset>
					</div>
				</div>
			</div>
		</form>
	</div>

</div>

<?php include 'inc/footer.php'; ?>