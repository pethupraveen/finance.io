<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<form class="form-horizontal" action="<?=site_url('Principal/Arrear_List_Print')?>" method="POST">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Arrear List</h5>

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
									<input class="form-check-input" type="radio" id="r1" name="Terms" value="D"> Daily
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

									<input type="text" class="form-control input-xs datepicker-dates" placeholder="Pick a date&hellip;"  name="LDate" value="">

									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
					<!-- Basic initialization -->





	<!-- /basic initialization -->
</div>
</form>

</div>
<!-- Theme JS files -->
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/widgets.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/effects.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/extensions/mousewheel.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/globalize.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/jqueryui_forms.js"></script>
<!-- Theme JS files -->

<?php include 'inc/footer.php'; ?>