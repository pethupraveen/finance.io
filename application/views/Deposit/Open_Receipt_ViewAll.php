<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
<!-- Basic responsive configuration -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Open_Receipt_ViewAll</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<table class="table datatable-responsive">
				<thead>
					<tr>
						<th>AcNo</th>
						<th>Date</th>
						<th>Party Name</th>
						<th>Region</th>
						<th>Amount</th>
						<th>Interst</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php foreach ($query as $row): ?>
						<td><?php echo $row['AcNo'];?></td>
						<td><?php echo $row['RDate'];?></td>
						<td><?php echo $row['PName'];?></td>
						<td><?php echo $row['country'];?></td>
						<td><?php echo $row['Amount'];?></td>
						<td><?php echo $row['Interest'].'%';?></td>
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<li><a  id="printpagebutton" onload="printpage()" target="_blank" href="<?php echo site_url('Deposit/Open_Receipt_Print/'.$row['AcNo']); ?>"><i class=" icon-printer2"></i> Print</a></li>
									<li><a href="<?php echo site_url('Deposit/Open_Payment_Edit/'.$row['id']); ?>"><i class=" icon-pencil7"></i> Edit</a></li>
									<li><a href="<?php echo site_url('Deposit/Open_Payment_Delete/'.$row['id']); ?>"><i class="icon-cross2"></i> Remove</a></li>
								</li>
							</ul>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
	</div>
	<!-- /basic responsive configuration -->
	
</div>
<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/datatables.min.js"></script>
	
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/datatables_responsive.js"></script>
<!-- Theme JS files -->

<?php include 'inc/footer.php'; ?>