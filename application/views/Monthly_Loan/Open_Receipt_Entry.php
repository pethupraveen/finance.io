<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
		
<div class="col-lg-12">
	<!-- Inline form modal -->
	<div id="modal_form_inline" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content text-center">
				<div class="modal-header"></div>
				<form action="<?php echo site_url('Monthly_Loan/Open_Receipt_Entry/'); ?>" class="form-inline" 
				method="POST">
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label>AcNo: </label>
							<input type="text" placeholder="Your AcNo" class="form-control" name="search">
							<div class="form-control-feedback"><i class="icon-user text-muted"></i>
							</div>
						</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" name="sbm" value="Search" class="btn btn-primary">Find me <i class="icon-search4"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /inline form modal -->
	

	<form class="form-horizontal" action="<?php echo site_url('Monthly_Loan/Open_Receipt_Entry/'); ?>" method="POST">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Opening Receipt Entry</h5>
				<div class="heading-elements">
					<div class="heading-btn">
						<button type="submit" name="sbm" value="Op_Add" class="btn btn-info" ><i class="icon-add position-left"></i> Ok</button>
												
						<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_form_inline"><i class="icon-search4 position-right"></i> Search </button>

						
					</div>
				</div>
			</div>

			<div class="panel-body">
				<div class="col-md-6">							
					<fieldset>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Date:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" placeholder="Enter Current Date" name="RDate" value="<?php echo date("m/d/Y");?>">
								<?php echo form_error('RDate', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>	
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Ac.No:</label>
							<div class="col-lg-9">

								<input type="text" class="form-control"  name="Rcode" value="<?php echo $query['AcNo']; ?>" >

								<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
							</div>
						</div>
					</fieldset>
				</div>

					<div class="col-md-6">							
					<fieldset>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Party Name</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" placeholder="Enter Loan Amount" name="PName" value="<?php echo $query['PName']; ?>">

								<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?>	
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Date:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" placeholder="Enter Loan Date" name="LDate" value="<?php echo $query['MCDate']; ?>">
								<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
				</fieldset>
						
				</div>				
			</div>
			<div class="panel-body">

				<div class="col-md-6">
					<fieldset>
						<!-------Monthly ------>

						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="LoanAmount" class="form-control" placeholder="Enter Loan Amount" name="LAmount" value="<?php echo $query['AmountM']; ?>">
								<?php echo form_error('LAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Rec Amt:</label>
							<div class="col-lg-9">
								<input type="text" id="RecAmount" class="form-control" placeholder="Enter Loan Rec Amount" name="RAmount" >
								<?php echo form_error('RAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>

						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Bal Amt:</label>
							<div class="col-lg-9">
								<input type="text" id="BalAmount" class="form-control" placeholder="Enter Loan Balance Amount" name="BAmount" value="<?php echo $query['BAmount']; ?>">
								<?php echo form_error('BAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
			
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Receipt Loan Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="payAmount" class="form-control" placeholder="Enter Receipt Loan Amount" name="RLAmount" value="0" onclick="javascript:addNum1();">
								<?php echo form_error('RLAmount', '<div class="text-danger">', '</div>'); ?>
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
							<label class="col-lg-3 control-label">Interest Amt:</label>
							<div class="col-lg-9">
								<input type="text" id="IAmount" class="form-control" placeholder="Enter Interest Amount" name="IAmount" value="<?php echo $query['AIntrest']; ?>">
								<?php echo form_error('IAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Interest Rec Amt:</label>
							<div class="col-lg-9">
								<input type="text" id="IRAmount" class="form-control" placeholder="Enter Interest Rec Amount" name="IRAmount" value="">
								<?php echo form_error('IRAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Interest Bal Amt:</label>
							<div class="col-lg-9">
								<input type="text" id="IBAmount" class="form-control" placeholder="Enter Interest Balance Amount" name="IBAmount" value="<?php echo $query['IBAmount']; ?>">
								<?php echo form_error('IBAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Receipt Interest Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="RIAmount" class="form-control" placeholder="Enter Receipt Interest Amount" name="RIAmount" value="0" onclick="javascript:addNum2();">
								<?php echo form_error('RIAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>

						
					</fieldset>
				</div>
			</div>
						
		</div>
		<?php echo form_close(); ?>

	</div><!--second panel body-->
			
</div>



<script type="text/javascript">  
		$(function() {  
			$('#payAmount').on('change',function() {  
				var txt = $('#BalAmount');
				var txt2 = $('#LoanAmount'); 
				var txt3 = $('#payAmount'); 
			
				if(txt.val() != null && txt.val() != '') {
					var sum = txt.val() - txt3.val()
					var sum2 = txt3.val()
					document.getElementById('BalAmount').value = sum;
					document.getElementById('RecAmount').value = sum2;
					
				} else {
					var sum = txt2.val() - txt3.val()
					var sum2 = txt3.val()
					document.getElementById('BalAmount').value = sum;
					document.getElementById('RecAmount').value = sum2;
				}
				

			})  
		});  
	</script>
	<script type="text/javascript">  
		$(function() {  
			$('#RIAmount').on('change',function() {  
				var txt = $('#IBAmount');
				var txt2 = $('#IAmount'); 
				var txt3 = $('#RIAmount'); 
				 if(txt.val() != null && txt.val() != '') {
					var sum = txt.val() - txt3.val()
					var sum2 = txt3.val()
					document.getElementById('IBAmount').value = sum;
					document.getElementById('IRAmount').value = sum2;
					
				} else {
					var sum = txt2.val() - txt3.val()
					var sum2 = txt3.val()
					document.getElementById('IBAmount').value = sum;
					document.getElementById('IRAmount').value = sum2;
				}
				

			})  
		});  
	</script>  
<?php include 'inc/footer.php'; ?>