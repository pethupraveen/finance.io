<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<!-- Main charts -->

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
			            startDate.setDate(startDate.getDate() + 1);
			            
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
	<div class="col-lg-12">

		<form class="form-horizontal" action="<?=site_url('TipUp_Loan/Open_Payment_Print')?>" method="POST" target="_blank">
			<div class="panel panel-flat">
				<div class="panel-heading">
					
					<h6 class="panel-title">TieUp Loan <span class="text-muted">Opening Payment Register</span></h6>
				
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
									<select class="multiselect-select-all-filtering" multiple="multiple" name="TName[]" >

										<?php foreach ($PName as $row): ?>
											<option value="<?=$row['TName']?>"><?=$row['PName']?></option>
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
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/interactions.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/widgets.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/effects.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/extensions/mousewheel.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/globalize.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>

		
		<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/jqueryui_forms.js"></script>
<?php include 'inc/footer.php'; ?>