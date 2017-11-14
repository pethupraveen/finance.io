<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?> 
<div class="content-wrapper">
	<div class="col-lg-12"> 
		<!-- Inline form modal -->
		<div id="modal_form_inline" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content text-center">
					<div class="modal-header"></div>

					<form action="<?=site_url('Monthly_Loan/Pop_Edit')?>" class="form-inline" method="POST">
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
		<!-- 2 columns form --> 
		<form class="form-horizontal" action="<?=site_url('Monthly_Loan/add')?>" method="POST"> 
			<div class="panel panel-flat"> 
				<div class="panel-heading">
					<h5 class="panel-title">Opening Principal Loan- <mute>Payment Entry</mute></h5> 
					<div class="heading-elements"> 
						<div class="heading-btn"> 
							<button type="submit" class="btn btn-info btn-sm"><i class="icon-check2 position-left"></i> Ok</button>
							<button type="button" class="btn btn-info btn-sm" id="New" ><i class="icon-new position-left"></i> New</button>
							<div class="btn-group">
		                    	<button type="button" class="btn btn-info btn-sm btn-icon dropdown-toggle" data-toggle="dropdown">
			                    	<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>
		                    	</button>
		                    	<ul class="dropdown-menu dropdown-menu-right">
		                    		<li><a href="#" data-toggle="modal" data-target="#modal_form_inline"><i class="icon-hammer-wrench position-left"></i>Edit</a>
		                    		</li>
		                    		<li class="divider"></li>

									<li><a href="#"><i class="icon-first"></i> First</a></li>
									<li><a href="#"><i class="icon-previous2"></i> Prev</a></li>
									<li><a href="#"><i class="icon-next2"></i> Next</a></li>
									<li><a href="#"><i class="icon-last"></i> Last</a></li>
									<li class="divider"></li>
									<li><a href="<?=site_url('Monthly_Loan/Open_Payment_View')?>"><i class="icon-archive position-left"></i> View All Data</a></li>
								</ul>
							</div>
							

							
						</div> 
					</div> 
				</div> 
				<div class="panel-body">
					<div class="col-md-6">
						<fieldset> 
							<div class="form-group form-group-xs"> <label class="col-lg-3 control-label">Date:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="Enter Current Date" name="MCDate" value="<?php echo date("d/m/Y");?>">
									<?php echo form_error('MCDate', '<div class="text-danger">', '</div>'); ?> 
								</div>
							</div>
							<input type="hidden" class="form-control" name="op" value="11"> 
							<div class="form-group form-group-xs"> 
								<label class="col-lg-3 control-label">Ac.No:</label> 
								<div class="col-lg-9"> 

									<input type="text" class="form-control" name="AcNo" id="AcNo" value="<?php echo set_value('AcNo');?>">
									<?php echo form_error('AcNo', '<div class="text-danger">', '</div>'); ?> 
								</div>
							</div>
							<div id="ans"></div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">Party Name</label> 
								<div class="col-lg-9"> 
									<select class="bootstrap-select" data-live-search="true" data-width="100%" name="PName"> 
										<option value="0"></option>
										<?php foreach ($query as $row ): ?> 
											<option value="<?=$row['PName']?>" <?php echo set_select('PName', $row['PName']); ?>> 
												<?=$row['PName']?></option> 
											<?php endforeach; ?>
									</select>
										<?php echo form_error('PName', '<div class="text-danger">', '</div>'); ?>
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
										<input type="hidden" min="1" max="12" value="1" step="1" id="months">
										<input id="Docu" type="number" onchange="computeLoan()" class="form-control" name="Docu" value="">
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
							<input type="hidden" class="form-control" id="iamount" name="IAmount"> 
							<input type="hidden" class="form-control" id="Total" name="Total">

						</fieldset>
					</div> 
				</div> 
			</div> 
			<?php echo form_close(); ?>

			<!--second panel body--> 
		</div> 

	</div> 
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->

	<script type="text/javascript">

		$(document).ready(function(){


			$('#New').click(function(){
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>Monthly_Loan/get_AcNo",
					data:{id:$(this).val()},
					datatype:'json',
					success: function (data) {
						var res = jQuery.parseJSON(data);
						$("#AcNo").val(res);

					}
				});
			});

		});

	</script>
	<script> function computeLoan()
		{
			var amount = document.getElementById('amount').value;
			var interest_rate = document.getElementById('interest_rate').value; 
			var months = document.getElementById('months').value; 
			var Docu = document.getElementById('Docu').value;
			var Ainterest = document.getElementById('Ainterest').value;
			var interest = (parseInt(amount) * (interest_rate * .01)) / parseInt(months);
			var payment = ((parseInt(amount) / parseInt(months)) + parseInt(interest)); 
			var Tol = document.getElementById("Total");
			if (Docu == 0 )	{
				Tol.value = parseInt(payment) - parseInt(Ainterest);
			}else {
				Tol.value = parseInt(payment) - parseInt(Ainterest);
			}
			var ansb  = document.getElementById('payment'); 
			ansb.value = parseInt(payment); 
			var ansc  = document.getElementById('interest');
			 ansc.value = parseInt(interest);

			 var ansd  = document.getElementById('iamount');
			 ansd.value = parseInt(interest);
		} </script> 
		<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url("assets")?>/js/plugins/forms/selects/bootstrap_select.min.js"></script>

	
	<script type="text/javascript" src="<?=site_url("assets")?>/js/pages/form_bootstrap_select.js"></script>
	<!-- /theme JS files -->
	<?php include 'inc/footer.php'; ?>