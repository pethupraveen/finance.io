<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
 <div class="col-lg-12">
 	<form action="<?=site_url('Party_Master\Region_Master_Entry');?>" class="form-horizontal" method="POST">
 		<div class="panel panel-flat">
 			<div class="panel-heading">
 				<h5 class="panel-title">Region Master Entry</h5>
 				<div class="heading-elements">
 					<ul class="icons-list">
 						<li><a data-action="collapse"></a></li>
 						<li><a data-action="reload"></a></li>
 						<li><a data-action="close"></a></li>
 					</ul>
 				</div>
 			</div>

 			<div class="panel-body">
 				<div class="form-group">
 					<label class="col-lg-3 control-label">Area Name:</label>
 					<div class="col-lg-4">
 						<input type="text" class="form-control" placeholder="Enter Your Area" value="<?php echo set_value('statename')?>" name="statename">
						<?php echo form_error('statename', '<div class="text-danger">', '</div>'); ?>
 					</div>
 				</div>

 				<div class="form-group">
 					<label class="col-lg-3 control-label">Select City Name</label> 
 					<div class="col-lg-4">
						 <select name="countryid" class="form-control has-warning">
							<option value="0">Select City</option>
							<?php foreach ($result as $row ): ?> 
								<option value="<?=$row['countryid']?>" <?php echo set_select('country', $row['country']); ?>> 
									<?php echo $row['country'];?></option> 
							<?php endforeach; ?>
						 </select>
 					</div>
 				</div>
 				
 				<div class="text-right">
 					<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
 				</div>
 			</div>
 		</div>
 	</form>
	
 </div><!--panel body First End-->
</div>
<?php include 'inc/footer.php'; ?>