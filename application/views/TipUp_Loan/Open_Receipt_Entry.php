<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<form  class="form-horizontal" method="POST" action="<?=site_url('TipUp_Loan\insert2')?>">
		<div class="panel panel-flat">
			<div  class="panel-heading">
				<h5 class="panel-title">TieUp Loan <span class="text-muted">Opening Receipt Entry</span></h5>
				<div class="heading-elements">
					<div class="heading-btn">
						<button type="submit" class="btn btn-info btn-xs"><i class="icon-add position-left"></i>Ok</button>
						<button type="button" class="btn btn-info btn-xs"><i class="icon-cross position-left"></i>Cancel</button>
						<div class="btn-group">
							<button type="button" class="btn btn-info btn-xs btn-icon dropdown-toggle" data-toggle="dropdown">
								<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="<?=site_url('Principal/Payment_Edit')?>"><i class="icon-gear"></i> Edit</a></li>
								<li class="divider"></li>

								<li><a href="#"><i class="icon-first"></i> First</a></li>
								<li><a href="#"><i class="icon-previous2"></i> Prev</a></li>
								<li><a href="#"><i class="icon-next2"></i> Next</a></li>
								<li><a href="#"><i class="icon-last"></i> Last</a></li>
								<li class="divider"></li>
								<li><a href="<?=site_url('Principal/Payment_View')?>"><i class="icon-archive"></i> View All</a></li>
							</ul>
						</div>
					</div>		
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
						<label class="col-lg-3 control-label">Date:</label>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control input-xs datepicker-dates" id="TDate" name="TRDate" value="<?php echo date('d/m/Y') ?>">

								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Ac.No:</label>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Ac.No" class="form-control input-xs" id="AcNo" name="TRAcNo" value="" required>
									<input type="hidden" class="form-control" name="op" value="11">
								</div>

							</div>
						</div>
					</div>
					</div><!--panel body Second End-->
					<div class="col-md-6">

						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Party Name:</label>
							<div class="col-lg-9">

								<select class="form-control countries"  name="City">
									<option value=""></option>
								</select>
								<?php echo form_error('City', '<div class="text-danger">', '</div>'); ?>

							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">AcNo:</label>

							<div class="col-lg-9">
								<select multiple="multiple" style="height: 85px;"  id="Name" class="form-control states">	
								
								  <option value=""></option>
								  
								</select> 
								<?php echo form_error('Area', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
							
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Party Name:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id="PName" readonly placeholder="Party Name">
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-6">
								
								<div class="form-group form-group-xs">
									<label class="col-lg-6 control-label">Loan Amount:</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="LAmt" placeholder="" readonly>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group form-group-xs">
									<label class="col-lg-6 control-label">Arrear Amount:</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="AAmt" name="TRAAmt" readonly>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-6">
								
								<div class="form-group form-group-xs">
									<label class="col-lg-6 control-label">Loan Bal Amt:</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="BAmt" name="TRBAmt" readonly>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-lg-12">
								
								<div class="form-group form-group-xs">
									<label class="col-lg-3 control-label">TieUp Details:</label>
									<div class="col-lg-9">
										<div class="table-responsive">
											<table class="table table-hover table-bordered table-xxs">
												<thead>
													<tr>
														<th style="width: 80px;">Name</th>
														<th style="width: 80px;">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Praveen Kumar</td>
														<td>5000000.00</td>
													</tr>
													<tr>
														<td>Naveen Kumar</td>
														<td>5000000.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

						</div>
					
						
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-lg-6">
								
								<div class="form-group form-group-xs">
									<label class="col-lg-6 control-label">Loan Date:</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="LDate" readonly >
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group form-group-xs">
									<label class="col-lg-6 control-label">Due Amount:</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="DueAmt" readonly>
									</div>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								
								<div class="form-group form-group-xs">
									<label class="col-lg-6 control-label">Loan Rec Amt:</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="LRAmt" name="TRRAmt" readonly>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group form-group-xs">
									<label class="col-lg-6 control-label">No of Arrear:</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="NA" name="TRNA" readonly>
									</div>
								</div>
								
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Receipt Loan Amount:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id="RLAmt">
							</div>
						</div>
						<div class="form-group form-group-xs">
							<label class="col-lg-3 control-label">Particulars:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive pre-scrollable">
						<table class="table table-bordered table-striped table-xxs" id="tb3">
							<thead>
								<tr>
									<th><a href="javascript:void(0);" id="addMore3" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
									<th>Bank Name</th>
									<th>Chq No</th>
									<th>Chq Date</th>
									<th>Amount</th>
									<th>Drawn Bank</th>
								</tr>
							</thead>
							<tbody>
								<tr >
									<td><a href='javascript:void(0);' class='remove3'><span class='glyphicon glyphicon-remove'></span></a></td>
									<td ><input style="width:200px" type="text" id="Bank Name" class="form-control input-xs"/></td>
									<td><input style="width:80px" type="text" id="Chq No" class="form-control input-xs" /></td>
									<td><input style="width:100px" type="text" id="Chq Date" class="form-control input-xs" value=""/></td>
									<td><input style="width:150px" type="text" id="Amount" class="form-control input-xs" /></td>
									<td><input style="width:150px" type="text" id="Drawn Bank" class="form-control input-xs" /></td>
								</tr>
							</tbody>
						</table>

					</div>





			</div>
		</div>
	</form>
</div><!--panel body First End-->
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
	
	$('#Name').on('input change', function() {
		/*Get the country list */
		var name =$('#Name :selected').val();
		$('#AcNo').val(name);
	    //var name2 = $('#AcNo').val();		
		$.post('<?=site_url("TipUp_Loan/method")?>',{data:name},function(result){
			var json = $.parseJSON(result);
			//var obj=jQuery.parseJSON(result);
			//var obj = jQuery.parseJSON( '{ "name": "John" }' );
			for (var i in json) 
            {
          		$('#PName').val(json[i].PName);
          		$('#LAmt').val(json[i].TAmt);
          		$('#LDate').val(json[i].TDate);
          		$('#DueAmt').val(json[i].TDAmt);
          		$('#NA').val(json[i].TNDue);

          		var BAmt = json[i].TRBAmt;
          
          		if (BAmt != "" && BAmt != null) {
          			$('#BAmt').val(json[i].TRBAmt);

          			//$('#AAmt').val(json[i].TRAAmt);
          		}
          		else{
          			$('#BAmt').val(json[i].TAmt);
          		}
          		var LRAmt = json[i].TRRAmt;
          		
          		if (LRAmt != "" && LRAmt != null) {
          			//$('#BAmt').val(json[i].TRBAmt);
          			$('#LRAmt').val(json[i].TDAmt);
          		}
          		else{
          			//$('#BAmt').val(json[i].TAmt);
          			$('#LRAmt').val(0);
          		}
          		var AAmt = json[i].TRAAmt;
          		
          		if (AAmt != "" && AAmt != null) {
          			//$('#BAmt').val(json[i].TRBAmt);
          			$('#AAmt').val(json[i].TRAAmt);
          			//$('#AAmt').val(json[i].TRAAmt);
          		}
          		else{
          			//$('#BAmt').val(json[i].TAmt);
          			$('#AAmt').val(0);
          		}
            }
      	});

	});

	$('#AcNo').on('input change', function() {
		/*Get the country list */
		var name =$('#AcNo').val();
		
	    //var name2 = $('#AcNo').val();
	   /* $.post('<?=site_url("TipUp_Loan/method2")?>',{data:name},function(res){
	    	var json = $.parseJSON(res);
	    	for (var j in json2) 
            {

            }

	    });	*/
		$.post('<?=site_url("TipUp_Loan/method")?>',{data:name},function(result){
			var json = $.parseJSON(result);
			//var obj=jQuery.parseJSON(result);
			//var obj = jQuery.parseJSON( '{ "name": "John" }' );
			for (var i in json) 
            {

          		$('#PName').val(json[i].PName);
          		$('#LAmt').val(json[i].TAmt);
          		$('#LDate').val(json[i].TDate);
          		$('#DueAmt').val(json[i].TDAmt);
          		$('#NA').val(json[i].TNDue);

          		var BAmt = json[i].TRBAmt;
          		if (BAmt == 0) {
          			
          			alert('Acc was closed');
					window.location.href="";
          			}
          		if (BAmt != "" && BAmt != null) {
          			$('#BAmt').val(json[i].TRBAmt);
          			//$('#AAmt').val(json[i].TRAAmt);
          			
          		
          		}
          		else{
          			$('#BAmt').val(json[i].TAmt);
          		}
          		var LRAmt = json[i].TRRAmt;
          		
          		if (LRAmt != "" && LRAmt != null) {
          			//$('#BAmt').val(json[i].TRBAmt);
          			$('#LRAmt').val(json[i].TDAmt);
          		}
          		else{
          			//$('#BAmt').val(json[i].TAmt);
          			$('#LRAmt').val(0);
          		}
          		var AAmt = json[i].TRAAmt;
          		
          		if (AAmt != "" && AAmt != null) {
          			//$('#BAmt').val(json[i].TRBAmt);
          			$('#AAmt').val(json[i].TRAAmt);
          			//$('#AAmt').val(json[i].TRAAmt);
          		}
          		else{
          			//$('#BAmt').val(json[i].TAmt);
          			$('#AAmt').val(0);
          		}

          		
          		
          		          				
            }
           
      	});
      	

	});
	
	$('#RLAmt').on('change', function() {
    		var RLAmt =$('#RLAmt').val();
    		var LAmt = $('#LAmt').val();
    		var BAmt = $('#BAmt').val();
    		var sum = 0;

    		if(BAmt == ""){

    		sum = parseInt(LAmt) - parseInt(RLAmt);
				$('#BAmt').val(sum);
				$('#LRAmt').val(RLAmt);
    			$('#AAmt').val(sum);
    		
    		}
    		else{
    		sum = parseInt(BAmt) - parseInt(RLAmt);
    			$('#BAmt').val(sum);
    			$('#LRAmt').val(RLAmt);
    			$('#AAmt').val(sum);
    		
    		}

    	});    	

</script>

<script type="text/javascript">

	$(document).ready(function(){

		
		$.ajax({
			type: "GET",
			url: "<?php echo base_url();?>TipUp_Loan/get_countries",
			data:{id:$(this).val()}, 
			beforeSend :function(){
				$('.countries').find("option:eq(0)").html("Please wait..");
			},                         
			success: function (data) {
				/*get response as json */
				$('.countries').find("option:eq(0)").html("Select Party Name");
				var obj=jQuery.parseJSON(data);
				$(obj).each(function()
				{
					var option = $('<option />');
					option.attr('value', this.value).text(this.label);           
					$('.countries').append(option);
				});  

				/*ends */

			}
		});

		/*Get the state list */

		$('.countries').change(function(){
			$.ajax({
				type: "POST",
				url: "<?php echo base_url();?>TipUp_Loan/get_states",
				data:{id:$(this).val()}, 
				beforeSend :function(){
					$(".states option:gt(0)").remove();
					
				},                         
				success: function (data) {
					/*get response as json */
					
					var obj=jQuery.parseJSON(data);
					$(obj).each(function()
					{
						var option = $('<option />');
						option.attr('value', this.value).text(this.label);           
						$('.states').append(option);
					});  

					/*ends */

				}
			});
		});
	});

</script>
<!-- Theme JS files -->
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/interactions.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/widgets.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/effects.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/extensions/mousewheel.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/globalize.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>

		
		<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/jqueryui_forms.js"></script>
<?php include 'inc/footer.php'; ?>