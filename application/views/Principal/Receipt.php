<?php include 'inc/header2.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Receipt Entry</h5>
			<div class="heading-elements">
				<button type="button" class="btn bg-slate btn-sm" data-toggle="modal" data-target="#modal_form_vertical">New Receipt Entry <i class="icon-play3 position-right"></i></button>

			</div>
		</div>

		<table class="table datatable-responsive">
			<thead>
				<tr>
					<th>AcNo</th>
					<th>Terms</th>
					<th>Receipt Date</th>
					<th>Name</th>
					<th>Loan Amount</th>
					<th>Balance</th>
					<th>Colsing </th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php 


				foreach($r->result() as $row)
				{
					echo "<tr>";
					echo "<td>";
					echo $row->AcNo;
					echo "</td><td>";
					echo $row->Terms;
					echo "</td><td>";
					echo $row->RCDate;
					echo "</td><td>";
					echo $row->Pname;
					echo "</td><td>";
					echo $row->LAmount;
					echo "</td><td>";
					echo $row->BAmount;
					echo "</td><td>";
					echo $row->ClDate;
					echo "</td>";
					?>
					<td class="text-center">
						<ul class="icons-list">
							<li class="dropdown">


								<li><a href="<?php echo site_url('Principal/Receipt_Edit/'.$row->AcNo); ?>"><i class=" icon-pencil7"></i> Edit</a></li>
								<li><a href="<?php echo site_url('Principal/ReceiptDelete/'.$row->id); ?>"><i class="icon-cross2"></i> Remove</a></li>

							</li>
						</ul>
					</td>
					<?php
					echo "</tr>";
				}

				?>
			</tbody>
		</table>

	</div>
	<!-- /basic datatable -->
</div>
<!-- Inline form modal -->
<div id="modal_form_vertical" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<div class="modal-header">
				<h5 class="modal-title">Receipt Entry</h5>
			</div>
			<form action="<?php echo site_url('Principal/ReceiptEcho/'); ?>" class="form-inline" method="POST">
				
				<div class="modal-body">
					<div class="form-group has-feedback">
						<label >Party Name</label>
						<select class="form-control" id="ddlOptions" name="Pname" onclick="Javascript:GetOptions()" >
							
							<?php foreach ($query->result() as $row ): ?> 
								<option value="<?=$row->AcNo?>" ><?php echo $row->Pname;?></option>
								
							<?php endforeach; ?>
						</select>
						
						<label >AcNo</label>
						<input type="text" class="form-control" name="AcNo" id="AcNo" value="">
					</div>

					<script type="text/javascript">
						function GetOptions()
						{
							var e = document.getElementById("ddlOptions");
							var strOptions = e.options[e.selectedIndex].value;
							var ansC = document.getElementById("AcNo");
							ansC.value = strOptions;

						}
					</script>

					

					
				</div>

				<div class="modal-footer text-center">
					<button type="submit" class="btn btn-primary">Check</button>
					
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /inline form modal -->



</div>
</div>
<?php include 'inc/footer.php'; ?>