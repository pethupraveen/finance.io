<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">

<!-- Main charts -->
<div class="row">
<div class="col-lg-12">
<!-- 2 columns form -->

<form class="form-horizontal" action="<?php echo site_url('Master/Update_data/'.$r->id); ?>" method="POST">
<div class="panel panel-flat">
<div class="panel-heading">
<h5 class="panel-title">Acconut Master</h5>
<div class="heading-elements">
<button type="submit" class="btn btn-info"><i class="icon-add position-left"></i> Update</button>
<a class="btn btn-info" href="<?=site_url('Master/Master_View')?>"><i class="icon-cog3 position-left"></i> View All Data</a>

</div>
</div>

<div class="panel-body">
<div class="row">
<div class="col-md-6">
<fieldset>
	<legend class="text-semibold"><i class="icon-reading position-left"></i> Account details</legend>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Account Name:<span class="text-danger">*</span></label>
		<div class="col-lg-9">
			<input type="text" class="form-control" placeholder="Enter account name" name="Name" value="<?php echo $r->accName; ?>">
			<?php echo form_error('Name', '<div class="text-danger">', '</div>'); ?>
		</div>
	</div>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Sub Group Under</label>
		<div class="col-lg-9">
			<select class="form-control" id="exampleSelect1" name="SubGroupCode" >
				<?php 
				foreach ($query as $row) {
					?> 
					<option><?php echo $row->subName;?></option> 
					<?php
				}?>
				<?php echo form_error('SubGroupCode', '<div class="text-danger">', '</div>'); ?>		
			</select>
			
			
		</div>
	</div>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Select your :</label>
		<div class="col-lg-9">
			<label class="form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="T" <?php if($r->tip_own == 'T' ) { echo 'checked'; } ?> name="TINNo"> TieUp
			</label>
			<label class="form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="O" name="TINNo" <?php if($r->tip_own == 'O' ) { echo 'checked'; } ?>>   Owner
			</label>
			<?php echo form_error('TieUp_Owner', '<div class="text-danger">', '</div>'); ?>
		</div>
	</div>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Opening Balance</label>
		<div class="col-lg-9">
			<input type="text" placeholder="Number Only" class="form-control" name="OpBal" value="<?php echo $r->OpBal; ?>">
			<?php echo form_error('OpBal', '<div class="text-danger">', '</div>'); ?>
		</div>
	</div>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Select your :</label>
		<div class="col-lg-9">
			<label class="form-check-inline">
				<input class="form-check-input" type="radio" id="inlineRadio1" value="D" name="OpBalDC" <?php if($r->OpBalDC == 'D' ) { echo 'checked'; } ?> > Debit
			</label>
			<label class="form-check-inline">
				<input class="form-check-input" type="radio" id="inlineRadio2" value="C" name="OpBalDC" <?php if($r->OpBalDC == 'C' ) { echo 'checked'; } ?> > Credit
			</label>
			<?php echo form_error('OpBalDC', '<div class="text-danger">', '</div>'); ?>
		</div>
	</div>
	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">TIN No:</label>
		<div class="col-lg-9">
			<input type="text" placeholder="TIN No" class="form-control" name="TINNo" value=" <?php echo $r->TINNo; ?>">
			<?php echo form_error('TINNo', '<div class="text-danger">', '</div>'); ?>
		</div>

	</div>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">C.S.T.NO :</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-md-6">
					<input type="text" placeholder="C.S.T.No" class="form-control" name="CSTNo" value=" <?php echo $r->CSTNo; ?>">
					<?php echo form_error('CSTNo', '<div class="text-danger">', '</div>'); ?>
				</div>

				<div class="col-md-6">

					<input type="text" placeholder="PAN No" class="form-control" name="PANNo" value="<?php echo $r->PANNo; ?>" >
					<?php echo form_error('PANNo', '<div class="text-danger">', '</div>'); ?>
				</div>
			</div>
		</div>
	</div>

</fieldset>
</div>

<div class="col-md-6">
<fieldset>
	<legend class="text-semibold"><i class="icon-user position-left"></i> Personal details</legend>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Email:</label>
		<div class="col-lg-9">
			<input type="text" placeholder="mail@gmail.com" class="form-control" name="Email" value=" <?php echo $r->Email; ?>">
			<?php echo form_error('Email', '<div class="text-danger">', '</div>'); ?>
		</div>
	</div>

	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Contact :</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-md-6">
					<input type="tel" placeholder="PhoneOff" class="form-control mb-15" name="phone" value="<?php echo $r->phone; ?>" >
					<?php echo form_error('PhoneOff', '<div class="text-danger">', '</div>'); ?>
				</div>

				<div class="col-md-6">

					<input type="tel" placeholder="PhoneRes" class="form-control" name="phone" value="<?php echo $r->phone; ?>">
					<?php echo form_error('PhoneRes', '<div class="text-danger">', '</div>'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group form-group-md">
		<label class="col-lg-3 control-label">Address1</label>
		<div class="col-lg-9">
			<input type="text" name="Address1" class="form-control" id="example-text-input" placeholder="Edit Address1 here" value="<?php echo $r->Address1; ?>">
			
			<?php echo form_error('Address1', '<div class="text-danger">', '</div>'); ?>
		</div>
	</div>
	<div class="form-group form-group-xs">
		<label class="col-lg-3 control-label">Location:</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-md-6">
					<input type="text" placeholder="State/Tamilnadu" class="form-control" name="State" value="<?php echo $r->State; ?>">
					<?php echo form_error('State', '<div class="text-danger">', '</div>'); ?>
					<input type="text" placeholder="PinCode" class="form-control" name="zip" value="<?php echo $r->zip; ?>">
					<?php echo form_error('PinCode', '<div class="text-danger">', '</div>'); ?>
				</div>

				<div class="col-md-6">
					<input type="text" placeholder="City" class="form-control" name="City" value="<?php echo $r->City; ?>">
					<?php echo form_error('City', '<div class="text-danger">', '</div>'); ?>
				</div>
			</div>
		</div>
	</div>

	
</fieldset>
</div>
</div>


</div>
</div>
<?php echo form_close(); ?>

</div><!--second panel body-->


</div>
</div>
<!-- /dashboard content -->

<?php include 'inc/footer.php'; ?>