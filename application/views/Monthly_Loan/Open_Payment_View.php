	
	<?php include 'inc/header.php'; ?>
	<?php include 'inc/sidebar.php'; ?>
	<!-- Main content -->
	<div class="content-wrapper">
		<!-- Basic datatable -->
		<div class="panel panel-flat">

			<div class="panel-heading">
				<h5 class="panel-title">Monthly Loan -<small>Opening Payment View</small> </h5>
				<div class="heading-elements">
					<div class="heading-btn">
						<a class="btn btn-info" href="<?=site_url('Monthly_Loan/Open_PrincipalView')?>"><i class="icon-archive position-left"></i> View All Data</a>
						<a class="btn bg-slate" href="<?=site_url('Monthly_Loan/Open_Payment_Entry')?>"><i class="icon-add position-left"></i> Add New </a>
					</div>
				</div>
			</div>

			<table class="table datatable-responsive">
				<thead>
					<tr>

						<th>Ac.No</th>
						<th>P.Name</th>
						<th>L.Date</th>
						<th>L.Amount</th>
						<th>Intrest</th>
						<th>Adv.In</th>
						<th>Doc.C</th>
						<th>ToTal</th>

						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 


					foreach($query->result() as $row)
					{
						echo "<tr>";
						echo "<td>";
						echo $row->AcNo;
						echo "</td><td>";
						echo $row->PName;
						echo "</td><td>";
						echo $row->MCDate;
						echo "</td><td>";
						echo $row->AmountM;
						echo "</td><td>";
						echo $row->Intrest.'%';
						echo "</td><td>";
						echo $row->AIntrest;
						echo "</td><td>";
						echo $row->Docu;
						echo "</td><td>";
						echo $row->Total;
						echo "</td>";
						?>
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<li><a target="_blank" href="<?php echo site_url('Monthly_Loan/Open_Payment_Print/'.$row->AcNo); ?>"><i class=" icon-printer2"></i> Print</a></li>
									<li><a href="<?php echo site_url('Monthly_Loan/Open_Payment_Edit/'.$row->AcNo); ?>"><i class=" icon-pencil7"></i> Edit</a></li>
									<li><a href="<?php echo site_url('Monthly_Loan/Open_Payment_Delete/'.$row->AcNo); ?>"><i class="icon-cross2"></i> Remove</a></li>
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
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/datatables_responsive.js"></script>
<?php include 'inc/footer.php'; ?>