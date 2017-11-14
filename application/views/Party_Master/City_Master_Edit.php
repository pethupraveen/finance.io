<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<div class="col-md-12">
		 	<form action="<?=site_url('Party_Master/City_Master_Update/'.$row['countryid']);?>" class="form-horizontal" method="POST">
		 		<div class="panel panel-flat">
		 			<div class="panel-heading">
		 				<h5 class="panel-title">City Master Entry</h5>
		 				<div class="heading-elements">
		 					<div class="heading-btn">
		 						<button type="submit" class="btn btn-primary">Update<i class="icon-gear position-right"></i></button>
		 						
		 						<a class="btn btn-primary" href="<?=site_url('Party_Master\City_Master')?>"><i class="icon-cross position-left"></i>Close</a>
		 					
		 					</div>
		 				</div>
		 			</div>

		 			<div class="panel-body">
		 				<div class="form-group">
		 					<label class="col-lg-3 control-label">City id:</label>
		 					<div class="col-lg-4">
		 						<input type="text" class="form-control" value="<?=$row['countryid']?>" name="countryid">
								<?php echo form_error('country', '<div class="text-danger">', '</div>'); ?>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="col-lg-3 control-label">City Name:</label>
		 					<div class="col-lg-4">

		 						<input type="text" class="form-control" value="<?=$row['country']?>" name="country">
								<?php echo form_error('country', '<div class="text-danger">', '</div>'); ?>
		 					</div>
		 				</div>
		 			
		 			</div>
		 		</div>
		 	</form>
	</div>
</div>
<!-- /main content -->

<?php include 'inc/footer.php'; ?>