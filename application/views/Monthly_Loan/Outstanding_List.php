<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<form class="form-horizontal" action="<?=site_url('Mon/Outstanding_List')?>" method="POST">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Outstanding List</h5>

				<div class="heading-elements">
					<input type="submit" class="btn btn-info" name="sbm" class="btn btn-info" value="Search">
					
				</div>
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Select your Terms:</label>
							<div class="col-lg-9" id="rates" >
								<label class="form-check-inline">
									<input class="form-check-input" type="radio" id="r1" name="Terms" 
									checked="checked" value="D"> Daily
								</label>
								<label class="form-check-inline">
									<input class="form-check-input" type="radio" id="r2"  name="Terms" value="W" > Weekly
								</label>
								<label class="form-check-inline">
									<input class="form-check-input" type="radio" id="r3" name="Terms" value="M" > Monthly
								</label>

								<?php echo form_error('Terms', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">As on Date:</label>
							<div class="col-lg-9">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-calendar22"></i></span>
									<input type="Date" class="form-control" name="SDate" value="">
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>		
					<!-- Basic initialization -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Outstanding list</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>


		<table class="table datatable-button-print-rows">
			<thead>
				<tr>
					<th>SNo</th>
					<th>AcNo</th>
					<th>Name</th>
					<th>ClosDate</th>
					<th>Bal.Amt</th>
					<th>Due.Amt</th>
					<th>Due</th>
					<th>Arr.Amt</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($query as $row): ?>
				<tr>
					<td></td>
					<td><?php echo $row['AcNo']; ?></td>
					<td><?php echo $row['PName']; ?></td>
					<td><?php echo $row['Maturity']; ?></td>
					<td><?php echo $row['BAmount']; ?></td>
					<td><?php echo $row['Due']; ?></td>
					<td><?php echo $row['Monthly']; ?></td>
					<td><?php echo $row['AAmount']; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- /basic initialization -->

</form>

</div>
<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/extensions/select.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/datatables_extension_buttons_print.js"></script>
	<!-- /theme JS files -->
<?php include 'inc/footer.php'; ?>