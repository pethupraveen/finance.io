<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
<div class="col-lg-12">
<form class="form-horizontal" action="<?=site_url('Master/GEntry')?>" method="POST">
<div class="panel panel-flat">
<div class="panel-heading">
	<h5 class="panel-title">Group Entry</h5>
	<div class="heading-elements">
		<div class="heading-btn">
			<button type="submit" class="btn btn-info"><i class="icon-add position-left"></i> Add</button>
			<a href="#edit" class="btn bg-info"><i class="icon-spinner4 position-left"></i> Edit</a>
			<a href="#delete" class="btn bg-info"><i class="icon-bin2 position-left"></i> Delete</a>
		</div>
	</div>
</div>
<div class="panel-body">
<div class="col-md-6">
<fieldset>
	<legend class="text-semibold">
		<i class="icon-users4 position-left"></i>Group details</legend>
		<div class="form-group ">
			<label class="col-lg-3 control-label">Group Name:</label>
			<div class="col-lg-9">
				<input type="text" class="form-control" placeholder="Enter Group Name" name="gName" value="<?php echo set_value('gName')?>">
				<?php echo form_error('gName', '<div class="text-danger">', '</div>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label">Select Group Type:</label>
			<div class="form-group col-lg-9">
				<label class="form-check-inline">
					<input class="form-check-input" type="radio" id="inlineRadio1" value="Balance Sheet" name="gType" value="<?php echo set_value('gType')?>"> Balance Sheet
				</label>
				<label class="form-check-inline">
					<input class="form-check-input" type="radio" id="inlineRadio2" value="Profit And Loss" name="gType" value="<?php echo set_value('gType')?>"> Profit And Loss
				</label>
				<?php echo form_error('gType', '<div class="text-danger">', '</div>'); ?>

			</div>
		</div>
	</fieldset>
</div>
</div><!--panel body Second End-->
</div>
</form>
</div><!--panel body First End-->
</div>
<?php include 'inc/footer.php'; ?>