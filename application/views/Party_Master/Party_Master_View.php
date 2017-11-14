<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h5 class="panel-title">Party Master </h5>
			<div class="heading-elements">
				<div class="heading-btn">
					
					<a class="btn btn-info" href="<?=site_url('Party_Master/Party_Master_View')?>"><i class="icon-book3 position-left"></i> View All</a>
					
					<a class="btn bg-slate btn-sm" href="<?=site_url('Party_Master/Party_Master_Entry')?>"> New Party Entry <i class="icon-file-plus position-right"></i></a>

				</div>	

			</div>
		</div>
		<table class="table datatable-responsive">
			<thead>
				<tr>
					<th>Id</th>
					<th>Party Name</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Area</th>
					<th>City</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($query as $row): ?>
				<tr>
					
					<td><?=$row['pcode']?></td>
					<td><?=$row['PName']?></td>
					<td><?=$row['Phone']?></td>
					<td><?=$row['Address']?></td>
					<td><?=$row['statename']?></td>
					<td><?=$row['country']?></td>
					<td class="text-center">
						<ul class="icons-list">
							<li class="dropdown">
								
								<li><a href="<?=site_url('Party_Master/Party_Master_Edit/'.$row['pcode'])?>"><i class=" icon-pencil5 position-left"></i>Edit</a></li>
								<li><a href="<?=site_url('Party_Master/Party_Master_Delete/'.$row['id'])?>"><i class="icon-cross2 position-left"></i>Delete</a></li>
						
							</li>
						</ul>
					</td>

				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		
	
	</div>
	<!-- /basic datatable -->

</div>

<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?=site_url('assets')?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/datatables_responsive.js"></script>
	<!-- /theme JS files -->

<?php include 'inc/footer.php'; ?>