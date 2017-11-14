<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Main charts -->
	<div class="col-lg-12">
		<!-- 2 columns form -->
		<div class="panel panel-flat">
			<form class="form-horizontal" target="_blank" action="<?=site_url('Monthly_Loan/Open_Payment_Print')?>" method="POST">
				<div class="panel-heading">
					<h6 class="panel-title">Monthly Loan <span class="text-muted">Open Payment Register</span></h6>
				</div>

				<div class="panel-body">
					<div class="col-md-6">
						<fieldset>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">From Date:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-calendar22"></i></span>
								
									<input type="text" class="form-control" placeholder="Pick a date&hellip;" name="SDate" id="dt1">
								</div>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">To Date:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-calendar22"></i></span>
									<input type="text" class="form-control" placeholder="Pick a date&hellip;" name="EDate" id="dt2">
									
								</div>

							</div>
						</div>
					<button type="submit" class="btn btn-default"><i class="icon-checkmark4 position-left"></i> OK </button>
					<button type="reset" class="btn btn-default"><i class=" icon-cancel-circle2 position-left"></i> Cancel</button>
						<fieldset>
						
					</div>
				</div>
			</form>
			
		</div>
	</div>
<!-- /main content -->
</div>
<!-- Theme JS files -->
	<script>

		$(document).ready(function () {
		    $("#dt1").datepicker({
		        dateFormat: "dd/mm/yy",
		        
		        onSelect: function () {
		            var dt2 = $('#dt2');
		            var startDate = $(this).datepicker('getDate');
		            //add 30 days to selected date
		            startDate.setDate(startDate.getDate() + 30);
		            
		            dt2.datepicker('setDate', startDate);
		           
		        }
		    });
		    $('#dt2').datepicker({
		        dateFormat: "dd/mm/yy"
		    });
		});
	</script>
	<script type="text/javascript" src="<?=site_url("assets")?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url("assets")?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	
	<script type="text/javascript" src="<?=site_url("assets")?>/js/pages/datatables_responsive.js"></script>
	<!-- /theme JS files -->
<?php include 'inc/footer.php'; ?>
