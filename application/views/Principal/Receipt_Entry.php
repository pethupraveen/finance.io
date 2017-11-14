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

						<form action="<?php echo site_url('Principal/Receipt_Entry/'); ?>" method="POST" class="form-inline">
							<div class="modal-body">
								<div class="form-group has-feedback">
									<label>AcNo: </label>
									<input type="text" placeholder="Your AcNo" name="AcNo2" class="form-control">
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

							</div>

							<div class="modal-footer text-center">
								<button type="submit" name="sbm" name="Search" class="btn btn-primary">Find me <i class="icon-search4"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /inline form modal -->

			<form class="form-horizontal" action="<?php echo site_url('Principal/Receipt_Entry/'); ?>" method="POST">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Receipt Entry</h5>
						<div class="heading-elements">
							<button type="submit" name="sbm" value="Op_Add" class="btn btn-info" ><i class="icon-add position-left"></i> Ok</button>
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
												<input class="form-check-input" type="radio" id="inlineRadio1" <?php if($query['Terms'] == 'D' ) { echo 'checked'; } ?> name="Terms" value="D"> Daily
											</label>
											<label class="form-check-inline">
												<input class="form-check-input" type="radio" id="inlineRadio2"  <?php if($query['Terms'] == 'W' ) { echo 'checked'; } ?> name="Terms" value="W" > Weekly
											</label>
											<label class="form-check-inline">
												<input class="form-check-input" type="radio" id="inlineRadio3" <?php if($query['Terms'] == 'M' ) { echo 'checked'; } ?> name="Terms" value="M" > Monthly
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
											<input type="text" class="form-control" name="AcNo" id="AcNo" value="<?php echo $query['AcNo']; ?>" >
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
									<ul id="finalquery"></ul>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Party Name</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Loan Amount" 
											id="PName" name="PName" value="<?php echo $query['PName']; ?>">

											<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?>	
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Date:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Enter Loan Date" name="LDate" value="<?php echo $query['LDate']; ?>">
											<?php echo form_error('LDate', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>


									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Loan Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="LoanAmount" class="form-control" placeholder="Enter Loan Amount" name="Amount" value="<?php echo $query['Amount']; ?>">
											<?php echo form_error('Amount', '<div class="text-danger">', '</div>'); ?>
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
											<input type="text" id="BalAmount" class="form-control" placeholder="Enter Loan Balance Amount" name="BAmount" value="<?php echo $query['BAmount']; ?>">
											<?php echo form_error('BAmount', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>



									<div class="form-group form-group-xs">
										<label class="col-lg-3 control-label">Arrear Amount:</label>
										<div class="col-lg-9">
											<input type="text" id="ArrAmount" class="form-control" placeholder="Enter Arrear Amount" name="AAmount" value="">
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
												<div class="form-control-static"><?php if($query['Terms'] == 'D' ) { echo $query['Terms']; } if($query['Terms'] == 'W' ) { echo $query['Terms']; } if($query['Terms'] == 'M' ) { echo $query['Terms']; } ?></div>
											</div>
											<?php echo form_error('Mode', '<div class="text-danger">', '</div>'); 

											?>
										</div>
									</div>
									<div class="form-group form-group-xs">
										<label class="col-xs-3 control-label">Closing Date:</label>
										<div class="col-xs-9">
											<input type="text" placeholder="Particulars" class="form-control" name="Maturity" value="<?php echo $query['Maturity']; ?>">

											<?php echo form_error('Maturity', '<div class="text-danger">', '</div>'); ?>
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="col-xs-3 control-label">Due Amount :</label>
										<div class="col-xs-9">

											<input type="text" id="Due" class="form-control"  name="DAmount" value="<?php echo round($query['Due']); ?>" >
											<?php echo form_error('Due', '<div class="text-danger">', '</div>'); ?>
										</div>

									</div>
									<div class="form-group form-group-xs">
										<label class="col-xs-3 control-label">Due Mode:</label>
										<div class="col-xs-9">
											<input type="text" placeholder="Due Date" class="form-control" name="DDate" value="<?php if($query['Terms'] == 'D' ) { echo $query['Monthly']; } if($query['Terms'] == 'W' ) { echo $query['Monthly']; } if($query['Terms'] == 'M' ) { echo $query['Monthly']; } ?>">

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
											<input type="text" id="payAmount" class="form-control" placeholder="Enter Receipt Loan Amount" name="payAmount" value="0" onclick="javascript:addNum1();">
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
					document.getElementById('ArrAmount').value = sum;
					document.getElementById('RecAmount').value = sum2;
					
				} else {
					var sum = txt2.val() - txt3.val()
					var sum2 = txt3.val()
					document.getElementById('BalAmount').value = sum;
					document.getElementById('ArrAmount').value = sum;
					document.getElementById('RecAmount').value = sum2;
				}
				

			})  
		});  
	</script>

	<script language="javascript">
		function addNum2()
		{	var val1 = parseInt(document.getElementById("In.BAmt").value);
			var val2 = parseInt(document.getElementById("R.InAmt").value);
			var ansD = document.getElementById("In.BAmt");
			ansD.value =  val1 - val2;
			var ansC = document.getElementById("In.RAmt");
			ansC.value =  val2;

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