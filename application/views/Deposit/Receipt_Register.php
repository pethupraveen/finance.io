<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Main charts -->
	<div class="col-lg-12">

		<form class="form-horizontal" action="<?=site_url('Deposit/Receipt_Search')?>" method="POST" target="_blank">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Receipt Register </h5>
					<div class="heading-elements">
						<div class="heading-btn">
						<button type="submit" class="btn btn-info btn-xs">Search</button>
					<button type="reset" class="btn btn-info btn-xs">Cancel</button>
							
						</div>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
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
							
							<div class="form-group form-group-xs">
								<label class="col-lg-6 control-label">Party Name Selection:</label>
								<div class="col-lg-12">
									<select name="PName" id="Search" class="form-control">
										<?php foreach ($PName as $row): ?>
											<option value="<?=$row['PName']?>"><?=$row['PName']?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
						</div>
					</div>
		
				</div>

			</div>
		</form>
	</div>
	<!-- /main content -->
</div>
									<script>$(function(){$('#Search').searchableSelect();});</script>
<!-- Theme JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/bootstrap_select.min.js"></script>
	
	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/form_bootstrap_select.js"></script>
	<!-- /theme JS files -->
<script>
	 // Select All and Filtering features
    $('.multiselect-select-all-filtering').multiselect({
        includeSelectAllOption: true,
        enableFiltering: true,
        templates: {
            filter: '<li class="multiselect-item multiselect-filter"><i class="icon-search4"></i> <input class="form-control" type="text"></li>'
        },
        onSelectAll: function() {
            $.uniform.update();
        }
    });
</script>
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
<!-- Theme JS files -->
 	<link href="<?=site_url('assets')?>/js/jquery.searchableSelect.css" rel="stylesheet" type="text/css">
   
    <script src="<?=site_url('assets')?>/js/jquery.searchableSelect.js"></script>


	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/notifications/pnotify.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

	
	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/form_multiselect.js"></script>
	<!-- /theme JS files -->

<?php include 'inc/footer.php'; ?>
