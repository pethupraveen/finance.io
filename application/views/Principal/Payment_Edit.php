<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?> 
<div class="content-wrapper">
	<!-- Main charts --> 
	<div class="row">
		<div class="col-lg-12"> 
			<!-- 2 columns form --> 
			<form class="form-horizontal" action="<?=site_url('Principal/Payment_update/'.$key['id'])?>" method="POST"> 
				<div class="panel panel-flat"> 
					<div class="panel-heading">
						<h5 class="panel-title">Principal Loan - <mute>Payment Update</mute></h5> 
						<div class="heading-elements"> 
							<div class="heading-btn"> 
								<button type="submit" class="btn btn-info" ><i class="icon-check2 position-left"></i> Update</button>
								<a class="btn btn-info" href="<?=site_url('Principal/Payment_Entry')?>"><i class="icon-archive position-left"></i> View All Data</a> 
							</div> 
						</div> 
					</div> 
					<div class="panel-body">
						<div class="col-md-6">
				<fieldset> 
					
					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">Select your Terms:</label>
						<div class="col-lg-9" id="rates" >
							<label class="form-check-inline">
								<input class="form-check-input" type="radio" id="r1" <?php if($key['Terms'] == 'D' ) { echo 'checked'; } ?> name="Terms" 
								 value="D"> Daily
							</label>
							<label class="form-check-inline">
								<input class="form-check-input" type="radio" id="r2" <?php if($key['Terms'] == 'W' ) { echo 'checked'; } ?> name="Terms" value="W" > Weekly
							</label>
							<label class="form-check-inline">
								<input class="form-check-input" type="radio" id="r3" <?php if($key['Terms'] == 'M' ) { echo 'checked'; } ?> name="Terms" value="M" > Monthly
							</label>

							<?php echo form_error('Terms', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group form-group-xs"> <label class="col-lg-3 control-label">Date:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="Enter Current Date" name="LDate" value="<?=$key['LDate']?>">
							<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?> 
						</div>
					</div>

						<input type="hidden" class="form-control" name="op" value="11">
						<div class="form-group form-group-xs"> 
							<label class="col-lg-3 control-label">Ac.No:</label> 
							<div class="col-lg-9"> 
								<input type="text" class="form-control" name="AcNo" id="AcNo" value="<?=$key['AcNo']?>">


								<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?> 
							</div>
						</div>

						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Party Name</label> 
							<div class="col-lg-9"> 

								<select class="form-control" name="PName">
									
									
										<option value="<?=$key['PName']?>"><?=$key['PName']?></option>
									
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
								<input type="text" id="Monthly" onkeydown="selects()" onchange="selects()" onkeypress="selects()" class="form-control" placeholder="Enter Number of" name="Monthly" value="<?=$key['Monthly']?>">
							<?php echo form_error('Monthly', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="Amount" class="form-control" onkeydown="javascript:addNum1();"
								placeholder="Enter Amount" name="Amount" value="<?=$key['Amount']?>">
								<?php echo form_error('Amount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Maturity:</label>
							<div class="col-lg-9">
								<input type="text" id="Maturity" class="form-control" name="Maturity" value="<?=$key['Maturity']?>" />
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
								<input type="text" class="form-control" placeholder="Enter Intrest Amount" name="Intrest" value="<?=$key['Intrest']?>">
								<?php echo form_error('Intrest', '<div class="text-danger">', '</div>');?>
							</div>
						</div>

						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Due Amount :</label>
							<div class="col-lg-3">

								<input type="text" id="Due" class="form-control"  name="Due" value="<?=$key['Due']?>">
								<?php echo form_error('Due', '<div class="text-danger">', '</div>'); ?>
							</div>
							<label class="col-lg-3 control-label">Collection Amount :</label>
							<div class="col-lg-3">
								<input type="text" id="Colc" class="form-control"  name="Colc" value="<?=$key['Colc']?>">
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
			</div> 
		</div> 
	</div> 
</div> 
<script type="text/javascript">
	function GetOptions()
	{
		var e = document.getElementById("ddlOptions");
		var strOptions = e.options[e.selectedIndex].value;
		var ansC = document.getElementById("AcNo");
		ansC.value = strOptions;

	}
</script>
<script language="javascript">
	function addNum1()
	{
		var val1 = parseInt(document.getElementById("AmountMonths").value);
		var val2 = parseInt(document.getElementById("Months").value);
		var ansD = document.getElementById("Due");
		var ansC = document.getElementById("Colc");
		ansD.value =  val1 / val2;
		ansC.value = val1 / val2;
	}
</script>
<script>
	function addNum2()
	{
		var val1 = parseInt(document.getElementById("AmountWeekly").value);
		var val4 = parseInt(document.getElementById("Weekly").value);
		var ansD = document.getElementById("Due");
		var ansC = document.getElementById("Colc");
		ansD.value =  val1 / val4;
		ansC.value = val1 / val4;
	}
</script>
<script>
	function addNum3()
	{
		var val1 = parseInt(document.getElementById("AmountDailly").value);
		var val6 = parseInt(document.getElementById("Dailly").value);
		var ansD = document.getElementById("Due");
		var ansC = document.getElementById("Colc");
		ansD.value =  val1 / val6;
		ansC.value = val1 / val6;
	}
</script>
<script>
	function myFunction() {
		var someDate = new Date();
		var numberOfDaysToAdd = parseInt(document.getElementById("Months").value);
		someDate.setMonth(someDate.getMonth() + numberOfDaysToAdd);
		var dd = someDate.getDate();
		var mm = someDate.getMonth() + 1;
		var y = someDate.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var someFormattedDate = mm + '/'+ dd + '/'+ y; 
		document.getElementById("MaturityM").value = someFormattedDate;
	}
</script>
<script>
	function myFunction2() {
		var someDate = new Date();
		var numberOfDaysToAdd = parseInt(document.getElementById("Weekly").value);
		someDate.setDate(someDate.getDate()+(numberOfDaysToAdd * 7));
		var dd = someDate.getDate();
		var mm = someDate.getMonth()+1;
		var y = someDate.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var someFormattedDate = mm + '/'+ dd + '/'+ y; 
		document.getElementById("MaturityW").value = someFormattedDate;
	}
</script>
<script>
	function myFunction3() {
		var someDate = new Date();
		var numberOfDaysToAdd = parseInt(document.getElementById("Dailly").value);
		someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
		var dd = someDate.getDate();
		var mm = someDate.getMonth()+1;
		var y = someDate.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var someFormattedDate = mm + '/'+ dd + '/'+ y; 
		document.getElementById("MaturityD").value = someFormattedDate;
	}
</script>
<script>
	$(document).ready(function() {
		$("input[name$='Terms']").click(function() {
			var test = $(this).val();
			$("div.desc").hide();
			$("#Cars" + test).show();
		});
	});
</script>


<?php include 'inc/footer.php'; ?>