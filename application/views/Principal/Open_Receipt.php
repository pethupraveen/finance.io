<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<!-- Main charts -->
	<div class="row">
		<div class="col-lg-12">

			<form class="form-horizontal" action="<?php echo site_url('Principal/Open_Receipt/'); ?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Open Receipt Update</h5>
						<div class="heading-elements">
							<div class="heading-btn">
							<button type="submit" name="filter" class="btn btn-info" ><i class="icon-gear position-left"></i> Check</button>
							</div>
						</div>
					</div>

					<div class="panel-body">
						<div class="col-md-6">

							<fieldset>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Select your Terms:</label>
									<div class="col-lg-9">

										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio1"  name="Terms" value="Daily"> Daily
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2"  name="Terms" value="Weekly" > Weekly
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2" name="Terms" value="Monthly" > Monthly
										</label>

									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Date:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Current Date" name="RCDate" value="<?php echo date("m/d/Y");?>">
										<?php echo form_error('RCDate', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>	
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Ac.No:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" id="AcNo" name="AcNo" value="" >
									
										<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Vc.No:</label>
									<div class="col-lg-9">
										
										<input type="number" class="form-control" id="VcNo" name="VcNo" value="" >

										<?php echo form_error('VcNo', '<div class="text-danger">', '</div>'); ?>		
									</div>
								</div>
							</fieldset>

						</div>
						<div class="col-md-6">
							<fieldset>


							</fieldset>
						</div>




					</div>
					<div class="panel-body">

						<div class="col-md-6">
							<fieldset>
								<!-------Monthly ------>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Party Name</label>
									<div class="col-lg-9">
										<select class="form-control" name="Pname" >
											
											<?php foreach ($query->result() as $row ): ?> 
												<option><?php echo $row->PName;?></option>
												
											<?php endforeach; ?>
										</select>
											
									</div>
								</div>

								<?php foreach ($query->result() as $row ): ?> 
								<?php echo $row->PName;?>
								<?php echo $row->AcNo;?>
									
								<?php endforeach; ?>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Date:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Loan Date" name="LDate" value="">
										<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>


								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="LoanAmount" class="form-control" placeholder="Enter Loan Amount" name="LAmount" value="">
										<?php echo form_error('AmountM', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Rec Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="RecAmount" class="form-control" placeholder="Enter Loan Rec Amount" name="RAmount" value="">
										<?php echo form_error('RAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Bal Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="BalAmount" class="form-control" placeholder="Enter Loan Balance Amount" name="BAmount" value="" onclick="javascript:accoun();">
										<?php echo form_error('BAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								


								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Arrear Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="Arrear" class="form-control" placeholder="Enter Arrear Amount" name="AAmount" value="">
										<?php echo form_error('AAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

							</fieldset>
						</div>
						<div class="col-md-6">
							<fieldset>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Mode:</label>
									<div class="col-lg-9">
										<div class="col-lg-10">
											<div class="form-control-static"></div>
										</div>
										<?php echo form_error('Mode', '<div class="text-danger">', '</div>'); 

										?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-xs-3 control-label">Closing Date:</label>
									<div class="col-xs-9">
										<input type="text" placeholder="Particulars" class="form-control" name="ClDate" value="">

										<?php echo form_error('ClDate', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-xs-3 control-label">Due Amount :</label>
									<div class="col-xs-9">

										<input type="text" id="Due" class="form-control"  name="DAmount" value="" readonly>
										<?php echo form_error('DAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
									
								</div>
								<div class="form-group form-group-xs">
									<label class="col-xs-3 control-label">Due Date:</label>
									<div class="col-xs-9">
										<input type="text" placeholder="Due Date" class="form-control" name="DDate" value="">

										<?php echo form_error('DDate', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>



							</fieldset>
						</div>


					</div>
					<div class="panel-body">

						<div class="col-md-6">
							<fieldset>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Receipt Loan Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="payAmount" class="form-control" placeholder="Enter Receipt Loan Amount" name="payAmount" value="" onclick="javascript:addNum1();" onclick="javascript:accoun();" >
										<?php echo form_error('payAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Particluares:</label>
									<div class="col-lg-9">
										<input type="text" id="Parti" class="form-control" placeholder="Enter Particluares" name="Parti" value="">
										<?php echo form_error('Parti', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>	
							</fieldset>

						</div>
						<div class="col-md-6">
							<fieldset>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Interest Less Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="InLAmount" class="form-control" placeholder="Enter Interest Less Amount" name="InLAmount" value="">
										<?php echo form_error('InLAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
							</fieldset>
						</div>
					</div>

				</div>
				<?php echo form_close(); ?>

			</div><!--second panel body-->
		</div>
	</div>
</div>
<!--
	<script type="text/javascript">
						function GetOptions()
						{
							var e = document.getElementById("ddlOptions");
							var strOptions = e.options[e.selectedIndex].value;
							var ansC = document.getElementById("AcNo");
							ansC.value = strOptions;

						}
					</script>

-->
</div>
</div>
<?php include 'inc/footer.php'; ?>