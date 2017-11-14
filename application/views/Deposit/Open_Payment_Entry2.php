<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<div class="col-lg-12">
		<form class="form-horizontal" action="<?php echo site_url('Deposit/Open_Payment_Entry/'); ?>" method="POST">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h6 class="panel-title">Deposit <span class="text-muted">Opening Payment Entry</span></h6>
					
					<div class="heading-elements">
						<div class="heading-btn">
							<button type="submit" name="sbm" value="Op_Add" class="btn btn-info" ><i class="icon-add position-left"></i> Ok</button>
							<button type="submit" name="sbm" value="Op_Search" class="btn btn-info" ><i class="icon-search position-left"></i> Search</button>
							
						</div>
					</div>
				</div>

				<div class="panel-body">
					<div class="col-md-6">							
						<fieldset>
							
							
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Date:</label>
								<div class="col-lg-9">
									
									<input type="text" class="form-control datepicker-dates" placeholder="Pick a date&hellip;" id="enddate" name="date1" value="<?php echo date('d/m/Y');?>">
									
									<?php echo form_error('date1', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>	
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Ac.No:</label>
								<div class="col-lg-9">

									<input type="text" class="form-control" id="AcNo" name="P_AcNo" value="<?php  ?>" >
							
									<?php echo form_error('P_AcNo', '<div class="text-danger">', '</div>'); ?>		
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
									<input type="text" class="form-control" placeholder="Enter Loan Amount" name="pcode" 
									value="<?php  ?>" readonly>

									<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?>	
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Dep Date:</label>
								<div class="col-lg-9">
								<?php ?>
									<input type="text" class="form-control" id="startdate" name="DDate" value="<?php		
									?>" readonly>
																		
									<?php echo form_error('DDate', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Dep Amount:</label>
								<div class="col-lg-9">
									<input type="text" id="p" class="form-control add" placeholder="Enter Loan Amount" name="DAmt" value="<?php ?>" readonly>
									<?php echo form_error('DAmt', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Dep Paid Amt:</label>
								<div class="col-lg-9">
									<input type="text" id="DPAmt" class="form-control add2" placeholder="Enter Loan Rec Amount" name="DPAmt" value="<?php   ?>">
									<?php echo form_error('DPAmt', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>

							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Dep Bal Amt:</label>
								<div class="col-lg-9">
									<input type="text" id="DBAmt" class="form-control total" placeholder="Enter Loan Balance Amount" name="DBAmt" value="<?php  ?>">
									<?php echo form_error('DBAmt', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							
							

							
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Interest Amt:</label>
								<div class="col-lg-9">
									<input type="hidden" id="in" class="form-control" value="<?php  ?>">
									<input type="hidden" id="duration" name="days" class="form-control">
									
									<input type="text" id="res" class="form-control" name="IAmt" value="">
									<?php echo form_error('IAmt', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Interest Paid Amt:</label>
								<div class="col-lg-9">
									<input type="text" id="IPAmt" class="form-control" placeholder="Enter Interest Rec Amount" name="IPAmt" value="<?php ?>">
									<?php echo form_error('IPAmt', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Interest Bal Amts:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control productTextInput" id="balance" name="IBAmt" value="<?php ?>">
									
									<?php echo form_error('IBAmt', '<div class="text-danger">', '</div>'); ?>
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
									<input type="text" id="payAmount" class="form-control sub" placeholder="Enter Receipt Loan Amount" name="RLAmt" >
									<?php echo form_error('RLAmount', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Receipt Interest Amount:</label>
								<div class="col-lg-9">
									<input type="text" id="RIAmt" class="form-control add2" placeholder="Enter Receipt Interest Amount" name="RIAmt" onchange ="D();" >
									<?php echo form_error('RIAmt', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset>

							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Total Amount:</label>
								<div class="col-lg-9">
									<input type="text" id="Total" class="form-control" placeholder="Total" name="Total" value="">
									<?php echo form_error('Total', '<div class="text-danger">', '</div>'); ?>
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
				</div>
				
				
						
			</div>
			<?php echo form_close(); ?>

		</div><!--second panel body-->

	</div>
	<script>
		getObj = function (objID){
		return document.getElementById(objID);
		}
		C = function () {
		getObj("balance").value=parseFloat(getObj("IBAmt").value  || 0)-
		(parseFloat(getObj("RIAmt").value || 0)) ;
		return false;
		}  

		D = function () {
		getObj("balance").value=parseFloat(getObj("balance").value || 0)-
		(parseFloat(getObj("RIAmt").value)||0) ;
		return false;
		}
	</script>
	
	<script>

			$(document).ready(function() {
	     		  		
	     			var startDate = moment($('#startdate').val(),"DD/MM/YYYY");
	     			var endDate = moment($('#enddate').val(),"DD/MM/YYYY");
	     			if (startDate<endDate) {
	     			var result = endDate.diff(startDate, 'days');
	     			var p =  $('#p').val(),
	     		    	i =  $('#in').val(),
	     		    	bal = $('#DBAmt').val(),
	     		    	res,total;

	     		    res = p*(i/100)*12*result/365;
	     		    total = res.toFixed(2);
	     		    
	     		    $('#res').val(total);
	     			}

	     			

			$('#enddate').on('change', function(e) {     		
				
					var startDate = moment($('#startdate').val(),"DD/MM/YYYY");
	     			var endDate = moment($('#enddate').val(),"DD/MM/YYYY");
	     			if (startDate<endDate) {
	     			var result = endDate.diff(startDate, 'days');
	     			var p =  $('#p').val(),
	     		    	i =  $('#in').val(),
	     		    	res,total;

	     		    res = p*(i/100)*12*result/365;
	     		    total = res.toFixed(2);
	     		    $('#res').val(total);
	     			}
	     			else{
	     				alert("Do not Entry Same Day Or Less Then Date");
	     			}
	     			var res = $('#res').val();
	     			
	     			var IPAmt = $('#IPAmt').val(),sum;
	     			sum = res - IPAmt;
	     			
	     			$('#balance').val(sum.toFixed(2));
	     			

	     			
	     		}); //end change function

			$('#payAmount').on('change',function(){
		 		
		 		var payAmount = $('#payAmount').val();
		 		var DBAmt = $('#DBAmt').val();
		 		if (DBAmt < payAmount) {
		 			alert("don't entry grater Then Your Balance Amount ")
		 		}
		 		
		 		$('#Total').val(payAmount);
		 	});
		   	$('#RIAmt').on('change',function(){
		    		
		    		var RIAmt = $('#RIAmt').val();
		    		var balance = $('#RIAmt').val();
		    		var payAmount = $('#payAmount').val();
		    		var sum;
		    		sum =  parseInt(payAmount) + parseFloat(RIAmt);
	    			$('#Total').val(sum.toFixed(2));
	    			
		    		
		    	});
		
		});

		
		
	</script>
	
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/ui/moment/moment.min.js"></script>
	<!-- Theme JS files -->
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/interactions.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/widgets.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/effects.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/extensions/mousewheel.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/globalize.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>

		
		<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/jqueryui_forms.js"></script>
	
	<!-- Theme JS files -->
	
<?php include 'inc/footer.php'; ?>