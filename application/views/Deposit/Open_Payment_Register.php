<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Main charts -->
	<div class="col-lg-12">

		<form class="form-horizontal" action="<?=site_url('Deposit/Open_Payment_Print')?>" method="POST" target="_blank">
			<div class="panel panel-flat">
				<div class="panel-heading">
					
					<h6 class="panel-title">Deposit <span class="text-muted">Opening Payment Register</span></h6>
				
					<div class="panel-body">
						<div class="col-md-6">
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">From Date:</label>
								<div class="col-lg-9">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Pick a date&hellip;" name="SDate" id="dt1" required>
										<span class="input-group-addon"><i class="icon-calendar22"></i></span>
										
									</div>
								</div>
							</div>
							<div class="form-group form-group-xs">
								<label class="col-lg-3 control-label">To Date:</label>
								<div class="col-lg-9">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Pick a date&hellip;" name="EDate" id="dt2" >
										<span class="input-group-addon"><i class="icon-calendar22"></i></span>
										
									</div>

								</div>
							</div>
							
							<div class="form-group form-group-xs">
								<label class="col-lg-6 control-label">Party Name Selection:</label>
								<div class="col-lg-12">
									<div class="multi-select-full">
									<select class="multiselect-select-all-filtering" multiple="multiple" name="pcode[]" required>

										<?php foreach ($PName as $row): ?>
											<option value="<?=$row['PName']?>"><?=$row['PName']?></option>
										<?php endforeach ?>
									</select>

								</div>
								</div>
							</div>
						
						</div>
					</div>
					<button type="submit" class="btn btn-default"><i class="icon-checkmark4 position-left"></i> OK </button>
					<button type="reset" class="btn btn-default"><i class=" icon-cancel-circle2 position-left"></i> Cancel</button>

			
					
				</div>

			</div>
		</form>
	</div>
	<!-- /main content -->
</div>
<!-- Theme JS files -->
	

<script>

		$(document).ready(function () {
		    $("#dt1").datepicker({
		        dateFormat: "dd/mm/yy",
		        changeMonth: true,
        		changeYear: true,
		        onSelect: function () {
		            var dt2 = $('#dt2');
		            var startDate = $(this).datepicker('getDate');
		            //add 30 days to selected date
		            startDate.setDate(startDate.getDate() + 30);
		            
		            dt2.datepicker('setDate', startDate);
		           
		        }
		    });
		    $('#dt2').datepicker({
		        dateFormat: "dd/mm/yy",
		        changeMonth: true,
        		changeYear: true,
		    });
		});
	</script>

	

<?php include 'inc/footer.php'; ?>
