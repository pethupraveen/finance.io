<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
<!-- Main charts -->
<div class="row">
<div class="col-lg-12">
	<!-- Inline form modal -->
	<div id="modal_form_inline" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content text-center">
				<div class="modal-header">
					
				</div>

				<form action="<?php echo site_url('Principal/Open_Receipt_Entry/'); ?>" class="form-inline" 
					method="POST">
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label>AcNo: </label>
							<input type="text" placeholder="Your AcNo" class="form-control" name="AcNo2">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

					</div>

					<div class="modal-footer text-center">
						<button type="submit" name="Search" class="btn btn-primary">Find me <i class="icon-search4"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /inline form modal -->
	

	<form class="form-horizontal" action="<?php echo site_url('Principal/Open_Receipt_Entry/'); ?>" method="POST">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Opening Receipt Entry</h5>
				<div class="heading-elements">
					<button type="submit" name="sbm" value="Op_Add" class="btn btn-info" ><i class="icon-gear position-left"></i> Update</button>

					<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_form_inline"><i class="icon-search4 position-right"></i> Search </button>
					
				</div>
			</div>

			<div class="panel-body">
				<div class="col-md-6">

					<fieldset>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Select your Terms:</label>
							<div class="col-lg-9">

								<label class="form-check-inline">
									<input class="form-check-input" type="radio" id="inlineRadio1" <?php if($result['Terms'] == 'D' ) { echo 'checked'; } ?> name="Terms" value="D"> Daily
								</label>
								<label class="form-check-inline">
									<input class="form-check-input" type="radio" id="inlineRadio2"  <?php if($result['Terms'] == 'W' ) { echo 'checked'; } ?> name="Terms" value="W" > Weekly
								</label>
								<label class="form-check-inline">
									<input class="form-check-input" type="radio" id="inlineRadio3" <?php if($result['Terms'] == 'M' ) { echo 'checked'; } ?> name="Terms" value="M" > Monthly
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

								<input type="text" class="form-control"  name="AcNo" value="<?php echo $result['AcNo'];?>" readonly>
								<input type="hidden" class="form-control"  name="Rcode" value="<?php echo $result['AcNo'];?>" >

								<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?>		
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
								<input type="text" class="form-control" placeholder="Enter Loan Amounts" name="Pname" value="<?php echo $result['PName'];?>">

								<?php echo form_error('Pname', '<div class="text-danger">', '</div>'); ?>	
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Date:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" placeholder="Enter Loan Date" name="LDate" value="<?php echo $result['LDate']; ?>">
								<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>


						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="LoanAmount" class="form-control" placeholder="Enter Loan Amount" name="LAmount" value="<?php echo $result['Amount']; ?>" readonly>
								<?php echo form_error('', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Rec Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="RecAmount" class="form-control" placeholder="Enter Loan Rec Amount" name="RAmount" value="<?php echo $result['RAmount']; ?>">
								<?php echo form_error('RAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>

						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Loan Bal Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="BalAmount" class="form-control" placeholder="Enter Loan Balance Amount" name="BAmount" value="<?php echo $result['BAmount']; ?>">
								<?php echo form_error('BAmount', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>



						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Arrear Amount:</label>
							<div class="col-lg-9">
								<input type="text" id="Arrear" class="form-control" placeholder="Enter Arrear Amount" name="AAmount" value="<?php echo $result['AAmount']; ?>">
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
									<div class="form-control-static"><?php if($result['Terms'] == 'D' ) { echo $result['Terms']; } if($result['Terms'] == 'W' ) { echo $result['Terms']; } if($result['Terms'] == 'M' ) { echo $result['Terms']; } ?></div>
								</div>
								<?php echo form_error('Mode', '<div class="text-danger">', '</div>'); 

								?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-xs-3 control-label">Closing Date:</label>
							<div class="col-xs-9">
								<input type="text" placeholder="Particulars" class="form-control" name="Maturity" 
								value="<?php echo $result['Maturity']; ?>">

								<?php echo form_error('Maturity', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						


						<div class="form-group form-group-xs">

							<label class="col-xs-3 control-label">Due Amount :</label>
							<div class="col-xs-9">

								<input type="text" id="n" class="form-control" name="Due" value="<?php echo round($result['Due']); ?>" >
								<?php echo form_error('Due', '<div class="text-danger">', '</div>'); ?>
							</div>

						</div>
						<div class="form-group form-group-xs">
							<label class="col-xs-3 control-label">Due Date:</label>
							<div class="col-xs-9">
								<input type="text" placeholder="Due Date" class="form-control" name="DDate" value="<?php if($result['Terms'] == 'D' ) { echo $result['Monthly']; } if($result['Terms'] == 'W' ) { echo $result['Monthly']; } if($result['Terms'] == 'M' ) { echo $result['Monthly']; } ?>">

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
								<input type="text" id="payAmount" class="form-control" placeholder="Enter Receipt Loan Amount" name="payAmount" value="0" onkeydown="javascript:addNum6();">
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

<script type="text/javascript">  
	$(function() {  
		$('#payAmount').on('click change',function() {  
			var txt = $('#BalAmount');
			var txt2 = $('#LoanAmount'); 
			var txt3 = $('#payAmount'); 
			if(txt.val() == 0) {
				alert("Ac Close");
				window.location= "index.php";
			}
			else if(txt.val() != null && txt.val() != '') {
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
<?php include 'inc/footer.php'; ?>