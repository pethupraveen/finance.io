
<?php include 'inc/sidebar.php'; ?>
<script language="javascript">
	function addNum1()
	{
			var val3 = parseInt(document.getElementById("BalAmount").value);
			var val2 = parseInt(document.getElementById("payAmount").value);
			var ansE = document.getElementById("BalAmount");
			$value = $("#BalAmount").val();

	if($value == 0 || $value < 0)
	{
	    alert("accounts cancel");
	}
	else
	{
	  ansE.value =  val3 - val2;
	  alert("accounts open");
	}

			var ansC = document.getElementById("RecAmount");
			ansC.value =  val2;

	}
</script>
<script>
function accoun() {
	$value = $("#BalAmount").val();

	if($value == 0 || $value < 0)
	{
	    alert("accounts cancel");
	    window.location.href = "index.php";
	}
	else
	{
	  alert("accounts open");
	}
	// body...
}
</script>
<script language="javascript">
	jQuery(document).ready(function(){
		$("input[name$='Terms']").click(function() {
			var test = $(this).val();
			$("div.desc").hide();
			$("#Cars" + test).show();
		});
	});

</script>


<div class="content-wrapper">
	<!-- Main charts -->
	<div class="row">
		<div class="col-lg-12">

			<form class="form-horizontal" action="<?php echo site_url('Principal/Open_Receipt_Update/'.$query->AcNo.'/'.$query->VcNo); ?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Open Receipt Update</h5>
						<div class="heading-elements">
							<div class="heading-btn">
							<button type="submit" class="btn btn-info" ><i class="icon-gear position-left"></i> Update</button>
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
											<input class="form-check-input" type="radio" id="inlineRadio1" <?php if($query->Terms == 'Daily' ) { echo 'checked'; } ?> name="Terms" value="Daily"> Daily
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2"  <?php if($query->Terms == 'Weekly' ) { echo 'checked'; } ?> name="Terms" value="Weekly" > Weekly
										</label>
										<label class="form-check-inline">
											<input class="form-check-input" type="radio" id="inlineRadio2" <?php if($query->Terms == 'Monthly' ) { echo 'checked'; } ?> name="Terms" value="Monthly" > Monthly
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

										<input type="text" class="form-control"  name="AcNo" value="<?=$query->AcNo?>" readonly>

										<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Vc.No:</label>
									<div class="col-lg-9">

										<input type="number" class="form-control"  name="VcNo" value="<?=$query->VcNo?>" >

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
										<input type="text" class="form-control" placeholder="Enter Loan Amount" name="Pname" value="<?=$query->Pname?>">

										<?php echo form_error('Pname', '<div class="text-danger">', '</div>'); ?>	
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Date:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" placeholder="Enter Loan Date" name="LDate" value="<?=$query->LDate?>">
										<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>


								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="LoanAmount" class="form-control" placeholder="Enter Loan Amount" name="LAmount" value="<?php echo $query->LAmount;  ?>">
										<?php echo form_error('AmountM', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Rec Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="RecAmount" class="form-control" placeholder="Enter Loan Rec Amount" name="RAmount" value="<?php echo $query->RAmount;  ?>">
										<?php echo form_error('RAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Loan Bal Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="BalAmount" class="form-control" placeholder="Enter Loan Balance Amount" name="BAmount" value="<?php echo $query->BAmount;  ?>" onclick="javascript:accoun();">
										<?php echo form_error('BAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								


								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">Arrear Amount:</label>
									<div class="col-lg-9">
										<input type="text" id="Arrear" class="form-control" placeholder="Enter Arrear Amount" name="AAmount" value="<?php echo $query->AAmount;  ?>">
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
											<div class="form-control-static"><?php echo $query->Terms; ?></div>
										</div>
										<?php echo form_error('Mode', '<div class="text-danger">', '</div>'); 

										?>
									</div>
								</div>
								<div class="form-group form-group-xs">
									<label class="col-xs-3 control-label">Closing Date:</label>
									<div class="col-xs-9">
										<input type="text" placeholder="Particulars" class="form-control" name="ClDate" value="<?php echo $query->ClDate;  ?>">

										<?php echo form_error('ClDate', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group form-group-xs">
									<label class="col-xs-3 control-label">Due Amount :</label>
									<div class="col-xs-9">

										<input type="text" id="Due" class="form-control"  name="DAmount" value="<?=$query->DAmount?>" readonly>
										<?php echo form_error('DAmount', '<div class="text-danger">', '</div>'); ?>
									</div>
									
								</div>
								<div class="form-group form-group-xs">
									<label class="col-xs-3 control-label">Due Pend:</label>
									<div class="col-xs-9">
										<input type="text" placeholder="Due Pend" class="form-control" name="DDate" value="<?php echo $query->DDate; ?>">

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
										<input type="text" id="payAmount" class="form-control" placeholder="Enter Receipt Loan Amount" name="payAmount" value="<?php echo $query->payAmount; ?>" onclick="javascript:addNum1();" onclick="javascript:accoun();" >
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


</div>
</div>

<?php include 'inc/footer.php'; ?>