<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<div class="col-lg-12">

		<form class="form-horizontal" action="<?=site_url('Party_Master/Party_Master_Entry')?>" method="POST">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Party Master Entry</h5>
					<div class="heading-elements">
						<div class="heading-btn">
							<button type="submit" class="btn bg-slate"><i class="icon-add position-left"></i> Add</button>
							<a href="<?=site_url('Party_Master/Party_Master_View')?>" class="btn bg-info"><i class="icon-pencil5 position-left"></i> Edit</a>
							<a href="<?=site_url('Party_Master/Party_Master_View')?>" class="btn bg-info"><i class="icon-bin position-left"></i> Delete</a>
						</div>
					</div>
				</div>

				<div class="panel-body">

					<div class="col-md-10">
						<fieldset>
							<legend class="text-semibold">
								<i class="icon-users4 position-left"></i>Party details</legend>
								<div class="form-group ">
									<label class="col-lg-3 control-label">Party Name:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Party Name" value="<?php echo set_value('PName')?>" name="PName">
										<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Contact:</label>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-md-6">
												<input type="tel" placeholder="Phone" class="form-control mb-15" name="Phone" maxlength="10"  value="<?php echo set_value('Phone')?>">
												<?php echo form_error('Phone', '<div class="text-danger">', '</div>'); ?>
											</div>

											<div class="col-md-6">

												<input type="tel" placeholder="Mobile" class="form-control" name="Mobile" maxlength="10" value="<?php echo set_value('Mobile')?>">
												<?php echo form_error('Mobile', '<div class="text-danger">', '</div>'); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Address:</label>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="building D, flat #67" name="Address" value="<?php echo set_value('Address')?>">
												<?php echo form_error('Address', '<div class="text-danger">', '</div>'); ?>	
											</div>

											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="Ring street 12" name="Address2" value="<?php echo set_value('Address2')?>">
												<?php echo form_error('Address2', '<div class="text-danger">', '</div>'); ?>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Location:</label>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-md-6">
												<select class="form-control countries" name="City" required>
													<option value="<?php echo set_value('City')?>">--Select Your City--</option>
												</select>
												<?php echo form_error('City', '<div class="text-danger">', '</div>'); ?>


											</div>
											<div class="col-md-6">

												<select class="form-control states" name="Area" required>
													<option value="<?php echo set_value('Area')?>">--Select Your Area--</option>
												</select>
												<?php echo form_error('Area', '<div class="text-danger">', '</div>'); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">ZIP code:</label>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-md-6">

												<input type="text" placeholder="625XXX" maxlength="6" class="form-control" name="Zipcode" value="<?php echo set_value('Zipcode')?>">
												<?php echo form_error('Zipcode', '<div class="text-danger">', '</div>'); ?>										

											</div>
											<div class="col-md-6">

												
											</div>
										</div>
									</div>
								</div>
								
								
							</fieldset>

						</div>



					</div><!--panel body Second End-->
				</div>
			</form>
		</div><!--panel body First End-->
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){

			/*Get the country list */

			$.ajax({
				type: "GET",
				url: "<?php echo base_url();?>Party_Master/get_countries",
				data:{id:$(this).val()}, 
				beforeSend :function(){
					$('.countries').find("option:eq(0)").html("Please wait..");
				},                         
				success: function (data) {
					/*get response as json */
					$('.countries').find("option:eq(0)").html("Select Your City");
					var obj=jQuery.parseJSON(data);
					$(obj).each(function()
					{
						var option = $('<option />');
						option.attr('value', this.value).text(this.label);           
						$('.countries').append(option);
					});  

					/*ends */

				}
			});

			/*Get the state list */

			$('.countries').change(function(){
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>Party_Master/get_states",
					data:{id:$(this).val()}, 
					beforeSend :function(){
						$(".states option:gt(0)").remove(); 
						$(".cities option:gt(0)").remove(); 
						$('.states').find("option:eq(0)").html("Please wait..");

					},                         
					success: function (data) {
						/*get response as json */
						$('.states').find("option:eq(0)").html("Select Your Area");
						var obj=jQuery.parseJSON(data);
						$(obj).each(function()
						{
							var option = $('<option />');
							option.attr('value', this.value).text(this.label);           
							$('.states').append(option);
						});  

						/*ends */

					}
				});
			});
		});

	</script>
	<?php include 'inc/footer.php'; ?>