<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?> 
<div class="content-wrapper">
	<!-- Main charts --> 
	<div class="row">
		<div class="col-lg-12"> 
			<!-- 2 columns form --> 
			<form class="form-horizontal" action="<?=site_url('Monthly_Loan/add')?>" method="POST"> 
				<div class="panel panel-flat"> 
					<div class="panel-heading">
						<h5 class="panel-title">Monthly Loan - <mute>Payment Entry</mute></h5> 
						<div class="heading-elements"> 
							<div class="heading-btn"> 
								<button type="submit" class="btn btn-info" ><i class="icon-check2 position-left"></i> Ok</button> <button type="button" class="btn btn-info" onclick="javascript:addNum7();"><i class="icon-new position-left"></i> New</button>
								<a class="btn btn-info" href="<?=site_url('Monthly_Loan/Payment_View')?>"><i class="icon-archive position-left"></i> View All Data</a> 
							</div> 
						</div> 
					</div> 
					<div class="panel-body">
						<div class="col-md-6">
							<fieldset> 
								<div class="form-group form-group-xs"> <label class="col-lg-3 control-label">Date:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Current Date" name="MCDate" value="<?php echo date("m/d/Y");?>">
										<?php echo form_error('MCDate', '<div class="text-danger">', '</div>'); ?> </div>
									</div>
									<script> 
										function addNum7() 
										{

											var val9 = parseInt(document.getElementById("AcNo").value); 
											var ansz = document.getElementById("AcNo2");
										    ansz.value =  val9;
										
										} 
									</script>
									 <input type="hidden" class="form-control" name="p" value="22"> 
									<div class="form-group form-group-xs"> 
										<label class="col-lg-3 control-label">Ac.No:</label> 
										<div class="col-lg-9">
										<input type="hidden" class="form-control" name="Aid" id="AcNo" value="<?php echo $AcNo['AcNo']; ?>"> 
																			
											<input type="text" class="form-control" name="AcNo" id="AcNo2" value="<?php echo set_value('AcNo');?>">
											<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?> 
										</div>
									</div>
									<div id="ans"></div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Party Name</label> 
										<div class="col-lg-9"> 
											<select name="PName" class="form-control has-warning"> 
												<?php foreach ($query->result() as $row ): ?> 
													<option value="<?=$row->PName?>" <?php echo set_select('PName', $row->PName); ?>> 
														<?php echo $row->PName;?></option> 
													</div>
												<?php endforeach; ?>
											</select>
											<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?> </div> 
										</div>
										<div class="form-group form-group-xs"> 
											<label class="col-lg-3 control-label">Particulars:</label> 
											<div class="col-lg-9"> 
												<input type="text" placeholder="Particulars" class="form-control" name="Parti" value="<?php echo set_value('Parti')?>"> 
												<?php echo form_error('Parti', '<div class="text-danger">', '</div>'); ?> 
											</div>
										</div> 
										<div class="form-group form-group-xs"> 
											<label class="col-lg-3 control-label">Amount:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"	placeholder="Enter Amount" id="amount" type="number" min="1" max="1000000" onchange="computeLoan()" name="AmountM" value="<?php echo set_value('AmountM')?>">
												<?php echo form_error('AmountM', '<div class="text-danger">', '</div>'); ?>
											</div> 
										</div>

									</fieldset> 
								</div>
								<div class="col-md-6">
									<fieldset>
										<div class="form-group form-group-xs"> 
											<label class="col-lg-3 control-label">Docu Charges :</label> 
											<div class="col-lg-9"> 
												<input type="hidden" min="1" max="72" value="1" step="1" id="months">
												<input id="Docu" type="number"  onchange="computeLoan()" class="form-control" name="Docu" value="">
												<?php echo form_error('Docu', '<div class="text-danger">', '</div>'); ?> 
											</div> 
										</div> <div class="form-group form-group-xs"> 
										<label class="col-lg-3 control-label">Intrest Amount: %</label> 
										<div class="col-lg-4"> 
											<input class="form-control" name="Intrest" id="interest_rate" type="number" min="0" max="100" value="10" step=".1" onchange="computeLoan()">
											<?php echo form_error('Intrest', '<div class="text-danger">', '</div>'); ?>
										</div> 
										<div class="col-lg-4"> 

											<input type="text" class="form-control" id="interest" placeholder="Intrest Amount" name="IAmount" value="<?php echo set_value('IAmount'); ?>" >

										</div> 
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Adv Intrest Amount:</label> 
										<div class="col-lg-9"> 
											<input class="form-control" placeholder="Enter Advance Intrest Amount" name="AIntrest" id="Ainterest" type="number" value="<?php echo set_value('AIntrest'); ?>" onchange="computeLoan()"> 
											<?php echo form_error('AIntrest', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div> 
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Documnet Details:</label> 
										<div class="col-lg-9"> 
											<input type="text" placeholder="Documnet Details" class="form-control" name="DocDetail" value="<?php echo set_value('DocDetail')?>"> 
											<?php echo form_error('DocDetail', '<div class="text-danger">', '</div>'); ?> 
										</div>
									</div>
									<input type="hidden" class="form-control" id="payment" name="payment"> 
									<input type="hidden" class="form-control" id="interest" name="IAmount"> 
									<input type="hidden" class="form-control" id="Total" name="Total">

								</fieldset>
							</div> 
						</div> 
					</div> 
					<?php echo form_close(); ?>

					<!--second panel body--> 
				</div> 
			</div> 
		</div> 
	</div> 
</div> 



<?php include 'inc/footer.php'; ?>