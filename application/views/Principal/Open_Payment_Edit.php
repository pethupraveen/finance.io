<?php include 'inc/header.php'; ?> 
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
<!-- Inline form modal -->
<div id="modal_form_inline" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<div class="modal-header"></div>

			<form action="<?=site_url('Principal/Open_Payment_Edit')?>" class="form-inline" method="POST">
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
<form class="form-horizontal" action="<?=site_url('Principal/Open_Payment_update/'.$key['AcNo'])?>" method="POST"> 
	<div class="panel panel-flat"> 
		<div class="panel-heading">
			<h5 class="panel-title">Opening Principal Loan- <mute>Opening Payment Edit</mute></h5> 
			<div class="heading-elements"> 
				<div class="heading-btn"> 
					<button type="submit" name="Update_button" class="btn btn-info btn-xs" ><i class="icon-check2 position-left"></i> Update</button>
				
					<a href="<?=site_url('Principal\Open_Payment_Entry')?>" class="btn btn-info btn-xs"><i class="icon-new position-left"></i> New</a>
					<a href="<?=site_url('Principal\Open_Payment_Entry')?>" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i> Cancel</a>
					
							
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
								<input type="text" id="Monthly" class="form-control" placeholder="Enter Number of" name="Monthly" value="<?=$key['Monthly']?>">
							<?php echo form_error('Monthly', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="Amount" class="form-control" placeholder="Enter Amount" name="Amount" value="<?=$key['Amount']?>">
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

<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/form_bootstrap_select.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/bootstrap_select.min.js"></script>
<script language="javascript">
		$('#Amount').on('input keydown', function() {
			var val1 = $('#Amount').val();
			var val2 = $('#Monthly').val();
			var sum = val1 / val2;
			$('#Due').val(sum.toFixed(2));
			$('#Colc').val(sum.toFixed(2));
		});
	
</script>
<script>
	$(document).ready(function(){

		$("#Monthly").on('input keydown',function(){
			var someDate = new Date();
			var Monthly = $('#Monthly').val();
			var Terms = $("input[name='Terms']:checked").val();
			$("div.desc").hide();
			$("#Cars" + Terms).show();
			  if(Terms == 'D')
		      {
       			someDate.setDate(someDate.getDate() + parseInt(Monthly));
       			var dd = someDate.getDate();
       			var mm = someDate.getMonth() + 1;
       			var y = someDate.getFullYear();
       			if(dd<10){
       				dd='0'+dd;
       			} 
       			if(mm<10){
       				mm='0'+mm;
       			} 
       			var someFormattedDate = dd + '/'+ mm + '/'+ y; 
		      }
		      else if(Terms == 'W')
		      {
  				someDate.setDate(someDate.getDate()+(parseInt(Monthly) * 7));
    			var dd = someDate.getDate();
    			var mm = someDate.getMonth() + 1;
    			var y = someDate.getFullYear();
    			if(dd<10){
    				dd='0'+dd;
    			} 
    			if(mm<10){
    				mm='0'+mm;
    			} 
    			var someFormattedDate = dd + '/'+ mm + '/'+ y; 
		      }
		      else if(Terms == 'M')
		      {
		        someDate.setMonth(someDate.getMonth() + parseInt(Monthly));
				var dd = someDate.getDate();
				var mm = someDate.getMonth() + 1;
				var y = someDate.getFullYear();
				if(dd<10){
					dd='0'+dd;
				} 
				if(mm<10){
					mm='0'+mm;
				} 
				var someFormattedDate = dd + '/'+ mm + '/'+ y;  
		      }
			$('#Maturity').val(someFormattedDate);

		
		
		    
		 	
		});
		
		
	});
</script>

<script>
	$(document).ready(function() {
			var test = $("input[name='Terms']:checked").val();
			$("div.desc").hide();
			$("#Cars" + test).show();
		
	});
</script>
<?php include 'inc/footer.php'; ?>