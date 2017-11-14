<?php include 'inc/header.php'; ?> 
<?php include 'inc/sidebar.php'; ?> 
		<div id="modal_form_inline" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content text-center">
					<div class="modal-header"></div>

					<form action="<?=site_url('Principal/Payment_Edit2')?>" class="form-inline" method="POST">
						<div class="modal-body">
							<div class="form-group has-feedback">
								<label>AcNo: </label>
								<input type="text" placeholder="Enter AcNo" name="Search" class="form-control">
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="submit" class="btn btn-primary">Find<i class="icon-search4 position-right"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /inline form modal -->
<div class="content-wrapper">

		<!-- Inline form modal -->
		<form class="form-horizontal" action="<?=site_url('Principal/Open_Payment_Entry')?>" method="POST"> 
			<div class="panel panel-flat"> 
				<div class="panel-heading">
					<h5 class="panel-title">Principal Loan- <mute>Payment Entry</mute></h5> 
					<div class="heading-elements"> 
						<div class="heading-btn"> 
							<button type="submit" name="Add_button" value="Add_button" class="btn btn-info btn-xs" ><i class="icon-check2 position-left"></i> Ok</button> 
							
							<div class="btn-group">
		                    	<button type="button" class="btn btn-info btn-xs btn-icon dropdown-toggle" data-toggle="dropdown">
			                    	<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>
		                    	</button>
		                    	<ul class="dropdown-menu dropdown-menu-right">
		                    		<li><a href="#" data-toggle="modal" data-target="#modal_form_inline"><i class="icon-hammer-wrench position-left"></i>Edit</a></li>
		                    		<li class="divider"></li>
								<!--First Last Button
									<li><a href="#"><i class="icon-first"></i> First</a></li>
									<li><a href="#"><i class="icon-previous2"></i> Prev</a></li>
									<li><a href="#"><i class="icon-next2"></i> Next</a></li>
									<li><a href="#"><i class="icon-last"></i> Last</a></li>
									<li class="divider"></li>
								-->
									<li><a href="<?=site_url('Principal/Open_Payment_View')?>"><i class="icon-archive"></i> View All</a></li>
								</ul>
							</div>
						</div> 
					</div> 
				</div> 


				<div class="panel-body">

					<div class="col-md-6">
						<fieldset> 
							<p id="results"></p>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Select your Terms:</label>
								<div class="col-lg-9" id="rates" >
									<label class="form-check-inline">
										<input class="form-check-input" type="radio" id="r1" name="Terms" 
										checked="checked" value="D"> Daily
									</label>
									<label class="form-check-inline">
										<input class="form-check-input" type="radio" id="r1"  name="Terms" value="W" > Weekly
									</label>
									<label class="form-check-inline">
										<input class="form-check-input" type="radio" id="r1" name="Terms" value="M" > Monthly
									</label>

									<?php echo form_error('Terms', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="form-group form-group-xs"> <label class="col-lg-3 control-label">Date:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="Enter Current Date" name="LDate" value="<?php echo date("d/m/Y");?>">
									<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?> 
								</div>
							</div>

								<input type="hidden" class="form-control" name="op" value="11">
								<div class="form-group form-group-xs"> 
									<label class="col-lg-3 control-label">Ac.No:</label> 
									<div class="col-lg-9"> 
										<input type="text" class="form-control" name="AcNo" id="AcNo" value="">


										<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?> 
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Party Name</label> 
									<div class="col-lg-9"> 
										<select class="bootstrap-select" data-live-search="true" data-width="100%" name="PName">
											<option></option>
											<?php foreach ($query as $row ): ?>
												<option value="<?=$row['PName'];?>"><?=$row['PName'];?></option>
											<?php endforeach; ?>
										</select>
										<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?> 
									</div> 
								</div>
								<div class="form-group form-group-xs">
									<div id="CarsD" class="desc">
										<label class="col-lg-3 control-label">Dailly:</label>
									</div>
									<div id="CarsM" class="desc" style="display:none;">
										<label class="col-lg-3 control-label">Months:</label>
									</div>
									<div id="CarsW" class="desc" style="display:none;">
										<label class="col-lg-3 control-label">Weekly:</label>
									</div>
									<div class="col-lg-9">
										<input type="text" id="Monthly" onkeydown="selects()" onchange="selects()" onkeypress="selects()" class="form-control" placeholder="Enter Number of" name="Monthly" value="<?php echo set_value('Monthly')?>">
									<?php echo form_error('Monthly', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="Amount" class="form-control" onkeydown="javascript:addNum1();"
										placeholder="Enter Amount" name="Amount" value="<?php echo set_value('Amount')?>">
										<?php echo form_error('Amount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Maturity:</label>
									<div class="col-lg-9">
										<input type="text" id="Maturity" class="form-control" name="Maturity"/>
										<?php echo form_error('Maturity', '<div class="text-danger">', '</div>');?>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="col-md-6">
							<fieldset>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label"></label>
									<div class="col-lg-9">
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Intrest Amount:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Intrest Amount" name="Intrest" value="<?php echo set_value('Intrest')?>">
										<?php echo form_error('Intrest', '<div class="text-danger">', '</div>');?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Due Amount :</label>
									<div class="col-lg-3">

										<input type="text" id="Due" class="form-control"  name="Due" readonly>
										<?php echo form_error('Due', '<div class="text-danger">', '</div>'); ?>
									</div>
									<label class="col-lg-3 control-label">Collection Amount :</label>
									<div class="col-lg-3">
										<input type="text" id="Colc" class="form-control"  name="Colc" readonly>
										<?php echo form_error('Colc', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Particulars:</label>
									<div class="col-lg-9">
										<input type="text" placeholder="Particulars" class="form-control" name="Parti" value="<?php echo set_value('Parti')?>">

										<?php echo form_error('Parti', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Documnet Amount:</label>
									<div class="col-lg-9">
										<input type="text" placeholder="Documnet Amount" class="form-control" name="DocAmount" value="<?php echo set_value('DocAmount')?>">
										<?php echo form_error('DocAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Documnet Details:</label>
									<div class="col-lg-9">
										<input type="text" placeholder="Documnet Details" class="form-control" name="DocDetail" value="<?php echo set_value('DocDetail')?>">

										<?php echo form_error('DocDetail', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
							</fieldset>
						</div>
				</div>
			</div> 
			<?php echo form_close(); ?>
		<!--second panel body--> 
	
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script language="javascript">
		$('#Amount').on('input keydown', function() {
			var val1 = $('#Amount').val();
			var val2 = $('#Monthly').val();
			var sum = val1 / val2;
			$('#Due').val(sum.toFixed(2));
			$('#Colc').val(sum.toFixed(2));
		});
	
</script>

<script type="text/javascript">

	$(document).ready(function(){
		
			$.ajax({
				type: "POST",
				url: "<?php echo base_url();?>Principal/get_AcNo",
				data:{id:$(this).val()},
				datatype:'json',
				success: function (data) {
					var res = jQuery.parseJSON(data);
					$("#AcNo").val(res);
				}
			});
		
	});
</script>
<script>
	$(document).ready(function() {
			var test = $("input[name$='Terms']").val();
			$("div.desc").hide();
			$("#Cars" + test).show();
		$("input[name$='Terms']").click(function() {
			var test = $(this).val();
			$("div.desc").hide();
			$("#Cars" + test).show();
		});
	});
</script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/form_bootstrap_select.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/bootstrap_select.min.js"></script>
<?php include 'inc/footer.php'; ?>
