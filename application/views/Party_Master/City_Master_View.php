<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<div class="col-md-12">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">City Master View</h5>
				<div class="heading-elements">
					<div class="heading-btn">
						<a href="<?=site_url('Party_Master/City_Master_Entry')?>">Add New City</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				
					<table class="table datatable-responsive3">
						<thead>
							<tr>
								<th>City Id</th>
								<th>City Name</th>
								<th class="text-center">Action</th>
								
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $row): ?>
							<tr>
								<td><?=$row['countryid']; ?></td>
								<td><?=$row['country']; ?></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<li><a href="<?php echo site_url('Party_Master/City_Master_Edit/'.$row['countryid'] ); ?>"><i class=" icon-pencil7"></i> Edit</a></li>
											<li>
												<a href="<?php echo site_url('Party_Master/City_Master_Delete/'.$row['countryid'] ); ?>); ?>"><i class="icon-cross2"></i> Remove</a>
											</li>
										</li>
									</ul>
								</td>
								<?php endforeach ?>
							</tr>
						</tbody>
					</table>
				
			</div>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>