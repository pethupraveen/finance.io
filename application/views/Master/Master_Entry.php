<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
<form class="form-horizontal" action="<?=site_url('Master/Master_Entry')?>" method="POST">
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Acconut Master Entry</h5>
		<div class="heading-elements">
			<div class="heading-btn">
				<button type="submit" class="btn btn-info" data-layout="topRight" data-type="success"><i class="icon-add position-left"></i> Add New</button>
				<a class="btn btn-info" href="<?=site_url('Master/Master_View')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
				
			</div>

		</div>
	</div>

	<div class="panel-body">
	
			<div class="col-md-6">
				<fieldset>
					<legend class="text-semibold"><i class="icon-reading position-left"></i> Account details</legend>

					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">Account Name:<span class="text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="Enter account name" name="accName" value="<?php echo set_value('accName')?>" required>
							<?php echo form_error('accName', '<div class="text-danger">', '</div>'); ?>
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
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="T" name="tin_no" > TieUp
							</label>
							<label class="form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="O" name="tin_no"> Owner
							</label>
							<?php echo form_error('TieUp_Owner', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>

					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">Opening Balance</label>
						<div class="col-lg-9">
							<input type="Number" placeholder="Number Only" class="form-control"  maxlength="8" name="OpBal" value="<?php echo set_value('OpBal')?>">
							<?php echo form_error('OpBal', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>

					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">Select your :</label>
						<div class="col-lg-9">
							<label class="form-check-inline">
								<input class="form-check-input" type="radio" id="inlineRadio1" value="<?php echo set_value('OpBalDC','D')?>" name="OpBalDC"> Debit
							</label>
							<label class="form-check-inline">
								<input class="form-check-input" type="radio" id="inlineRadio2" value="<?php echo set_value('OpBalDC','C')?>" name="OpBalDC" > Credit
							</label>
							<?php echo form_error('OpBalDC', '<div class="text-danger">', '</div>'); ?>

						</div>
					</div>
					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">TIN No:</label>
						<div class="col-lg-9">
							<input type="text" placeholder="TIN No" class="form-control" name="TINNo" value="<?php echo set_value('TINNo')?>">
							<?php echo form_error('TINNo', '<div class="text-danger">', '</div>'); ?>
						</div>

					</div>

					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">C.S.T.NO :</label>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="C.S.T.No" class="form-control" 
									name="CSTNo" value="<?php echo set_value('CSTNo')?>">
									<?php echo form_error('CSTNo', '<div class="text-danger">', '</div>'); ?>
								</div>

								<div class="col-md-6">

									<input type="text" placeholder="PAN No" class="form-control" name="PANNo" value="<?php echo set_value('PANNo')?>" >
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
							<input type="text" placeholder="mail@gmail.com" class="form-control" name="Email" value="<?php echo set_value('Email')?>">
							<?php echo form_error('Email', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>

					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">Contact :</label>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-md-6">
									<input type="tel" placeholder="Phone" class="form-control mb-15" 
									name="PhoneOff" value="<?php echo set_value('PhoneOff')?>" >
									<?php echo form_error('PhoneOff', '<div class="text-danger">', '</div>'); ?>
								</div>

								<div class="col-md-6">

									<input type="tel" placeholder="Mobile" class="form-control" 
									name="PhoneRes" value="<?php echo set_value('PhoneRes')?>">
									<?php echo form_error('PhoneRes', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group form-group-md">
						<label class="col-lg-3 control-label">Address</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="Enter your address here" name="Address1" value="<?php echo set_value('Address1');?>">
							<?php echo form_error('Address1', '<div class="text-danger">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group form-group-xs">
						<label class="col-lg-3 control-label">Location:</label>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="State/Tamilnadu" class="form-control" name="State" value="<?php echo set_value('State')?>">
									<?php echo form_error('State', '<div class="text-danger">', '</div>'); ?>
									<input type="text" placeholder="PinCode" class="form-control"
									name="PinCode" value="<?php echo set_value('PinCode')?>">
									<?php echo form_error('PinCode', '<div class="text-danger">', '</div>'); ?>
								</div>

								<div class="col-md-6">
									<input type="text" placeholder="City" class="form-control" name="City" value="<?php echo set_value('City')?>">
									<?php echo form_error('City', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
					</div>

					
				</fieldset>
			</div>
		


	</div>
</div>
<?php echo form_close(); ?>

</div><!--second panel body-->

<?php include 'inc/footer.php'; ?>