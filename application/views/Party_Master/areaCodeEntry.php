
	<?php include 'inc/sidebar.php'; ?>
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<!-- Vertical form modal -->
				<div id="modal_form_vertical" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h5 class="modal-title">Area Code Entry</h5>
							</div>

							<form action="<?=site_url('PartyMaster/areaCodeEntry')?>" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>City name</label>
												<input type="text" placeholder="City name" class="form-control" name="aName" value="<?php echo set_value('aName')?>">
												<?php echo form_error('aName', '<div class="text-danger">', '</div>'); ?>

											</div>

											<div class="col-sm-6">
												<label>Area Code</label>
												<input type="text" placeholder="Area Code" class="form-control" name="aCode" value="<?php echo set_value('aCode')?>">
												<?php echo form_error('aCode', '<div class="text-danger">', '</div>'); ?>

											</div>
										</div>
									</div>

								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Add Area</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /vertical form modal -->
				<form class="form-horizontal" action="<?=site_url('PartyMaster/areaCode')?>" method="POST">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Area Code Entry</h5>
							<div class="heading-elements">
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-add position-left"></i>Add New Area Code </button>
								<button type="submit" class="btn bg-info">View All</button>
								
							</div>
						</div>
						
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>City Name</th>
									<th>Area Code</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php 

								foreach($query->result() as $row)
								{
									echo "<tr>";
									echo "<td>";
									echo $row->aName;
									echo "</td><td>";
									echo $row->aCode;
									echo "</td><td>";
									echo "<a href='".site_url('PartyMaster/areaCodeEdit/' .$row->id)."'>Edit</a>
									|<a href='".site_url('PartyMaster/areaCodeDelete/' .$row->id)."'>Delete</a></td>";
									echo "</tr>";
								}

								?>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
				</div>
			</form>
		</div><!--panel body First End-->

	</div>
</div>
</div>

</div>
<!-- /main content -->
</div>
<!-- /page content -->

</div>
<!-- /page container -->
<?php include 'inc/footer.php'; ?>