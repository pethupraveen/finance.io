<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<form class="form-horizontal" id="myform" action="<?=site_url('Deposit\insert')?>" Method="POST">
	<div class="panel panel-flat">
		<div  class="panel-heading">
			<h5 class="panel-title">Deposit Open Receipt Entry</h5>
			<div class="heading-elements">
				<div class="heading-btn">
					<button type="button" class="btn btn-info btn-xs" id="New"><i class="icon-new position-left"></i>New</button>
					<button type="submit" class="btn btn-info btn-xs"><i class="icon-add position-left"></i>Ok</button>
					<div class="btn-group">
						<button type="button" class="btn btn-info btn-xs btn-icon dropdown-toggle" data-toggle="dropdown">
							<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="<?=site_url('Deposit/Open_Receipt_Edit')?>"><i class="icon-gear"></i> Edit</a></li>
							<li class="divider"></li>

							<li><a href="#"><i class="icon-first"></i> First</a></li>
							<li><a href="#"><i class="icon-previous2"></i> Prev</a></li>
							<li><a href="#"><i class="icon-next2"></i> Next</a></li>
							<li><a href="#"><i class="icon-last"></i> Last</a></li>
							<li class="divider"></li>
							<li><a href="<?=site_url('Deposit/Open_Receipt_ViewAll')?>"><i class="icon-archive"></i> View All</a></li>
						</ul>
					</div>
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
											<input type="text" class="form-control input-xs datepicker-dates" placeholder="Pick a date&hellip;" id="RDate" name="RDate" value="<?php echo date('d/m/Y') ?>">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label">Ac.No:</label>
								<div class="col-lg-9">
									<div class="row">
										<div class="col-md-6">
											<input type="hidden" class="form-control" name="op" value="11">
											<input type="text" placeholder="Ac.No" name="AcNo" class="form-control input-xs" id="AcNo" value="" required>
										</div>

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label">PartyName:</label>
								<div class="col-lg-9">
									<select class="bootstrap-select" data-live-search="true" data-width="100%" name="pcode" required>
										<option></option>
											<?php foreach ($query2 as $row ): ?> 
											<option value="<?=$row['pcode']?>" <?php echo set_select('PName', $row['pcode']); ?>> 
												<?=$row['PName']?></option> 

											<?php endforeach ?>

										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Particluars:</label>
									<div class="col-lg-9">
										<input type="text" placeholder="" class="form-control input-xs" name="feature">
										
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Amount:</label>
									<div class="col-lg-9">
										<input type="number" placeholder="" class="form-control qty" name="Amount" required>
										
									</div>
								</div>

							</fieldset>
						</div>

						<div class="col-md-6">
							<fieldset>
								<div class="form-group">
									<label class="col-lg-3 control-label">Interest %:</label>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-md-6">
												<input type="number" placeholder="Interest %" class="form-control input-xs" name="Interest" required>
											</div>


										</div>

									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Document Details:</label>
									<div class="col-lg-9">
										<textarea rows="5" cols="5" class="form-control input-xs" placeholder="" name="Doc_detail"></textarea>
									</div>
								</div>

							</fieldset>
						</div>
					</div>

				</div>

				<div class="panel-body">
					<div class="container">
					<h5 class="panel-title">TipUp Details</h5>
						<div class="col-md-8 column">
							<table class="table table-hover small-text" id="tb">
								<thead>
									
								<tr class="tr-header">
									<th>Name</th>
									<th>Amount</th>
									<th>Per%</th>
									
									<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
									</tr>
								</thead>
									<tbody>
										
									<tr>
										<td ><select class="form-control"  name="Tname[]">
		     	                      			<option></option>
		     	                      		<?php foreach ($query as $row ): ?> 
		     									<option value="<?=$row['name']?>"><?=$row['name']?></option> 
		     								<?php endforeach ?>
		     	                    		</select></td>
										
										<td ><input type="text" name="TAmount[]" class="form-control price"></td>
										<td ><input type="text" name="Per[]" id="amount" class="form-control amount" value="0"></td>
										
										<td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
									</tr>
									</tbody>
									
								</table>

							</div>


						</div>
					</div>
			</form>

			<!-- /2 columns form -->
		</div>
	</div>
	
	

	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/form_bootstrap_select.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/bootstrap_select.min.js"></script>
	<script>
		$(document).ready(function(){
		    $('.price').on('input',function() {
		        	var amount = 0;
		            var qty = $('.qty').val();
		            $('#tb > tbody  > tr').each(function() {
		                var price = $(this).find('.price').val();

		                var amount = ((price/qty) * 100).toFixed(2);
		                $(this).find('.amount').val(amount);
		            });
		    });
		    $('.amount').on('input',function() {
		        	var amount = 0;
		            var qty = $('.qty').val();
		            $('#tb > tbody  > tr').each(function() {
		            	var price = $(this).find('.amount').val();
		                var amount = ((qty/100) * price);
		                $(this).find('.price').val(amount);
		            });
		    });
		
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
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>

<script type="text/javascript">

		$(document).ready(function(){


			$('#New').click(function(){
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>Deposit/get_AcNo",
					data:{id:$(this).val()},
					datatype:'json',
					success: function (data) {
						var res = jQuery.parseJSON(data);
						$("#AcNo").val(res);

					}
				});
			});

		});

	</script>
<?php include 'inc/footer.php'; ?>
