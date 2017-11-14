<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
<div id="modal_form_inline" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<div class="modal-header">
				<h5 class="modal-title">Enter Your City</h5>
			</div>

			<form action="<?=site_url('Party_Master\City_Master_Entry');?>" class="form-inline" method="POST">
				<div class="modal-body">
					<div class="form-group ">
						<label >City Name:</label>
						<input type="text" class="form-control" placeholder="Enter Your City" value="<?php echo set_value('country')?>" name="country">
						<?php echo form_error('country', '<div class="text-danger">', '</div>'); ?>

					</div>

				</div>

				<div class="modal-footer text-center">
					<button type="submit" class="btn btn-primary">Add<i class="icon-plus22"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">City Master View</h5>
				<div class="heading-elements">
					<div class="heading-btn">
						<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_form_inline">Add New City <i class="icon-play3 position-right"></i></button>
					</div>
				</div>
			</div>
			
			<table class="table datatable-basic">
				<thead>
					<tr>
					
						<th>Ac.No</th>
						<th>P.Name</th>
						<th class="text-center">Actions</th>
									
					</tr>
				</thead>
				<tbody>
					<?php foreach ($result as $row): ?>
						
					<tr>
					
						<td><?=$row['countryid']?></td>
						<td><?=$row['country']?></td>
						<td class="text-center icons-list dropdown">
							<a href="<?php echo site_url('Party_Master/City_Master_Edit/'.$row['countryid'] ); ?>"><i class=" icon-pencil7"></i> Edit</a></li>
							<a href="<?php echo site_url('Party_Master/City_Master_Delete/'.$row['countryid'] ); ?>); ?>"><i class="icon-cross2"></i> Remove</a>
						</td>
					
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

</div>
<!-- Theme JS files 
<script type="text/javascript" src="<?=site_Url('assets');?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
<script type="text/javascript" src="<?=site_Url('assets');?>/js/pages/datatables_responsive3.js"></script>
-->
<script type="text/javascript" src="<?=site_Url('assets');?>/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?=site_Url('assets');?>/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="<?=site_Url('assets');?>/js/pages/datatables_basic3.js"></script>
<?php include 'inc/footer.php'; ?>