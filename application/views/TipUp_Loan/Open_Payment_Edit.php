<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<form  class="form-horizontal" method="POST" action="<?=site_url('TipUp_Loan\Open_Payment_Update')?>">
		<div class="panel panel-flat">
			<div  class="panel-heading">
				<h5 class="panel-title">TieUp Loan <span class="text-muted">Opening Payment Update</span></h5>
				<div class="heading-elements">
					<div class="heading-btn">
						<button type="submit" class="btn btn-info btn-xs"><i class="icon-gear position-left"></i>Update</button>
						<a href="<?=site_url('TipUp_Loan/Open_Payment_Entry')?>" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i>Cancel</a>
					
					</div>		
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<fieldset>

							<div class="form-group">
								<label class="col-lg-3 control-label">Date:</label>
								<div class="col-lg-9">
									<div class="row">
										<div class="col-md-6">
											<input type="text" class="form-control input-xs" id="TDate" name="TDate" value="<?php echo $r->TDate; ?>" readonly>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label">Ac.No:</label>
								<div class="col-lg-9">
									<div class="row">
										<div class="col-md-6">
											<input type="text" placeholder="Ac.No" class="form-control input-xs" id="AcNo" name="TAcNo" value="<?php echo $r->TAcNo; ?>" readonly>
											<input type="hidden" class="form-control" name="op" value="11">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label">PartyName:</label>
									<div class="col-lg-9">
										<select class="bootstrap-select show-tick" data-size="5" data-live-search="true" data-width="100%" name="TName" readonly>
											<option value="<?=$r->pcode?>"><?php echo $r->PName; ?></option> 
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Particluars:</label>
									<div class="col-lg-9">
										<input type="text" placeholder="" class="form-control text-uppercase text-semibold text-size-mini input-xs" name="TPart" value="<?php echo $r->TPart; ?>">

									</div>
								</div>
								<div class="form-group">

									<label class="col-lg-3 control-label">Amount:</label>
									<div class="col-lg-6">
										<input type="text" placeholder="Your Amount" id="TAmt" class="form-control input-xs qty" name="TAmt" required value="<?php echo $r->TAmt; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-3 control-label">Due Start:</label>
									<div class="col-lg-9">
										<div class="col-lg-6">
											<input type="text" class="form-control input-xs datepicker-dates Dues" placeholder="Due Start Date&hellip;" id="txtDate" name="TDDate" value="<?php echo $r->TDDate; ?>">
											
										</div>
										<div class="col-lg-6">
											<input type="number" id="follow_Date" placeholder="Mode" name="TMode" class="form-control input-xs Mode" value="<?php echo $r->TMode; ?>">
										</div>
									</div>
								</div>
								

								
								<div class="form-group">
									<label class="col-lg-3 control-label">No.of Dues:</label>
									<div class="col-lg-9">
										<div class="col-lg-6">
											<input type="text" placeholder="No.of Dues" name="TNDue" id="ND" class="form-control input-xs ND" value="<?php echo $r->TNDue; ?>">
										</div>
										<div class="col-lg-6">
											<input type="text" placeholder="Due Amount" name="TDAmt" id="TDAmt" class="form-control input-xs sum2" value="<?php echo $r->TDAmt; ?>">
										</div>
									</div>
								</div>

							</fieldset>
						</div>
						
						
						<div class="col-md-6">
							<fieldset>
								<div class="form-group">
									<label class="col-lg-3 control-label">Docu. Charges:</label>
									<div class="col-lg-9">
										<div class="col-lg-6">
											<input type="number" placeholder="Docu. Charges" name="TDCh" class="form-control input-xs Docu"
											value="<?php echo $r->TDCh; ?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Interest %:</label>
									<div class="col-lg-9">
										<div class="col-lg-6">
											<input type="number" placeholder="Interest %" name="TInt" class="form-control input-xs TInt" value="<?php echo $r->TInt; ?>">
										</div>

									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Interest Amt.:</label>
									<div class="col-lg-9">
										<div class="col-lg-6">
											<input type="number" placeholder="Interest Amt" name="TInAmt" class="form-control input-xs sum4" value="<?php echo $r->TInAmt; ?>">
										</div>
										<div class="col-lg-6">
											<input type="number" placeholder="Total" name="TTotal" class="form-control input-xs sum" value="<?php echo $r->TTotal; ?>">
										</div>
									</div>
								</div>
								
								<script> $('.TInt').on('input change', function() {

									var amount = $('#TAmt').val();
									var interest_rate = $('.TInt').val(),interest,payment;

									interest = (parseInt(amount) * (interest_rate * .01)) / 1;
									payment = ((parseInt(amount) / 1) - parseInt(interest)); 
									$('.sum4').val(interest);
									$('.sum').val(payment);

								}); </script> 
								<div class="form-group">
									<label class="col-lg-3 control-label">Address:</label>
									<div class="col-lg-9">
										<input type="text" placeholder="Your address of living" class="form-control text-uppercase text-semibold text-size-mini input-xs" name="TAddress" value="<?php echo $r->TAddress; ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-3 control-label">Document Details:</label>
									<div class="col-lg-9">
										<textarea rows="5" cols="5" name="TDDat" value="<?php echo $r->TDDat; ?>" class="form-control input-xs" placeholder="" 
										></textarea>
									</div>
								</div>
								
							</fieldset>
						</div>
					</div>
					<div class="col-xs-6">
						
					<h6>Payment Mode</h6>
						<div class="form-group">
							<label class="col-xs-3 control-label">Cash:</label>
							<div class="col-xs-4">
								<input type="text" placeholder="Cash" name="Cash" class="form-control input-xs cash">
							</div>
						</div>
					</div>
					<div class="col-xs-12">
					<div class="table-responsive pre-scrollable">
						<table class="table table-bordered table-striped table-xxs" id="tb3">
							<thead>
								<tr>
									<th><a href="javascript:void(0);" id="addMore3" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
									<th>Bank Name</th>
									<th>Chq No</th>
									<th>Chq Date</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr >
									<td><a href='javascript:void(0);' class='remove3'><span class='glyphicon glyphicon-remove'></span></a></td>
									<td ><input style="width:300px" type="text" id="Bank Name" class="form-control input-xs"/></td>
									<td><input style="width:80px" type="text" id="Chq No" class="form-control input-xs" /></td>
									<td><input style="width:100px" type="text" id="Chq Date" class="form-control input-xs" value=""/></td>
									<td><input style="width:150px" type="text" id="Amount" class="form-control input-xs" /></td>
								</tr>
							</tbody>
						</table>

					</div>
					</div>
					<div class="col-xs-12">
						<div class="col-xs-6">

							<div class="form-group">
								<label class="col-md-3 control-label">Cheque:</label>
								<div class="col-md-4">
									<input type="text" placeholder="Your Amount" id="gtot" class="form-control grandto">

								</div>
							</div>
						</div>
						
					</div>

					
					<div class="col-xs-6">
						<h6>Repay Schedule</h6>
						<div class="table-responsive pre-scrollable">
							<table class='table table-hover table-bordered table-striped table-xxs'>
								<thead>
									<tr>
										<th style='width:300px'>Sno</th>
										<th >Date</th>
										<th >Amount</th>
										<th >Bank Name</th>
										<th >ChqNo</th>
										<th >Particulars</th>
									</tr>
									</thead>
									<tbody id="vvvv">
									
									</tbody>
								
							</table>
						</div>

						

					</div>
		
					<div class="col-xs-6">
						<h6>Tipup Details</h6>
						<div class="table-responsive pre-scrollable">
							<table class="table table-bordered table-striped table-xxs" id="tb">
								<thead>

									<tr class="tr-header">
										<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
										<th>Name</th>
										<th>Amount</th>
										<th>Per%</th>

									</tr>
								</thead>
								<tbody>

									<tr>
										<td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
										<td><select style="width:130px" class="form-control input-xs"  name="Tname[]">
											<option></option>
											<?php foreach ($query as $row ): ?> 
												<option value="<?=$row['name']?>"><?=$row['name']?></option> 
											<?php endforeach ?>
										</select></td>

										<td><input style="width:80px" type="text" name="TAmount[]" class="form-control input-xs price"></td>
										<td ><input style="width:50px" type="text" name="Per[]" id="amount" class="form-control input-xs amount" value="0"></td>

									</tr>
								</tbody>

							</table>
						</div>

					</div>
					<hr/>
					<div class="col-xs-12 clearfix">
						
						<div class="col-xs-6">

							<div class="form-group">
								<label class="col-md-1 control-label">Total:</label>
								<div class="col-md-4">
									<input type="text" placeholder="Your Amount" class="form-control input-xs" id="SchTotal">
									
								</div>
							</div>
						</div>
						<div class="col-xs-6">

							<div class="form-group ">
								<label class="col-md-1 control-label">Total:</label>
								<div class="col-md-4">
									
									<input type="text" placeholder="Your Amount" class="form-control" id="TieTotal">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</form>
		<!-- /2 columns form -->
	</div>

	
	<script>
		$('.qty').on('input change', function() {
			var amt = $('.qty').val();
			$('.sum').val(amt);
			$('.cash').val(amt);
		});
		
		$('#follow_Date').on('input change', function() {

			var tt2 = document.getElementById('follow_Date').value;
			var tt3 = document.getElementById('txtDate').value;
			var date = new Date();
			var newdate = new Date(date);
			$('#txtDate').each(function() {

				newdate.setDate(newdate.getDate() + parseInt(tt2));

				var dd = newdate.getDate();
				var mm = newdate.getMonth() + 1;
				var y = newdate.getFullYear();

				var someFormattedDate = dd + '/' + mm + '/' + y;
				document.getElementById('txtDate').value = someFormattedDate;
			});

		});
		$('.ND').on('input change', function() {
			var ND = $('.ND').val();
			var amt = $('.qty').val(),sum2;
			sum2 = amt /  ND;
			$('.sum2').val(sum2.toFixed(2));
		});


	</script>
<script>
		$(document).ready(function(){
		    $('.price').on('change input',function() {
		        	var amount = 0;
		            var qty = $('.qty').val();
		            var hh2 = 0;
		  
		            $('#tb > tbody  > tr').each(function() {
		                var price = $(this).find('.price').val();

		                var amount = ((price/qty) * 100);
		                $(this).find('.amount').val(amount);
		                hh2 += parseFloat(price);
		            });
		            $('#TieTotal').val(hh2.toFixed(2));
		    });
		    $('.amount').on('change input',function() {
		        	var amount = 0;
		            var qty = $('.qty').val();
		             var hh2 = 0;
		            $('#tb > tbody  > tr').each(function() {
		            	var price = $(this).find('.amount').val();
		                var amount = ((qty/100) * price);
		                $(this).find('.price').val(amount);
		                hh2 += parseFloat(amount);
		            });
		             $('#TieTotal').val(hh2.toFixed(2));
		    });
		
		});
	
	</script>
	<script>
		$('#ND').on('keydown', function() {
				 var tt6 = $('#follow_Date').val();
				 var tt7 = $('#ND').val();
				 var TDAmt = $('#TDAmt').val();
				 var newdate = new Date();
				 var count = 1;
				var detailDesc = "<div>";
				
				for(var i=0;i< tt7;i++){
					count = i+1;
					newdate.setDate(newdate.getDate() + parseInt(tt6));
					var dd = newdate.getDate();
					var mm = newdate.getMonth() + 1;
					var y = newdate.getFullYear();

					var someFormattedDate = dd + '/' + mm + '/' + y;
					//var array = JSON.parse("[" + someFormattedDate + "]");
					detailDesc += "<tr><td >"+count+"</td><td>"+someFormattedDate+"</td><td contentEditable='true' class = 'TDAmt'>"+TDAmt+"</td><td contentEditable='true'></td><td contentEditable='true'></td><td contentEditable='true'></td></tr>";
					}
					detailDesc += "</div>";
					$('#vvvv').html(detailDesc);
					var sum10 = 0;
					$('.TDAmt').each(function() {
					    sum10 += parseFloat($(this).text());
					});
					$('#SchTotal').val(sum10.toFixed(2));
			});

	</script>
	

<script>
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>0) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script>
$(function(){
    $('#addMore3').on('click', function() {
              var data = $("#tb3 tr:eq(1)").clone(true).appendTo("#tb3");
              data.find("input").val('');
     });
     $(document).on('click', '.remove3', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>0) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
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
	
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/form_bootstrap_select.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/bootstrap_select.min.js"></script>
	<?php include 'inc/footer.php'; ?>