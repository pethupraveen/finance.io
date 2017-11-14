<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Account Master View</h5>
			<div class="heading-elements">
				<div class="heading-btn">
					<a class="btn btn-info" href="<?=site_url('Master/Master_View')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
					<a class="btn btn-info" href="<?=site_url('Master/Master_Entry')?>"><i class="icon-cog3 position-left"></i> Add New Data</a>
				</div>
			</div>
		</div>
		<table class="table datatable-responsive">
			<thead>
				<tr>
					<th>Name</th>
					<th>SubGroup</th>
					<th>TiUp_Owner</th>
					<th>OpBal</th>
					<th>OpBalDC</th>
					<th>TINNo</th>
					<th>CSTNo</th>
					<th>PANNo</th>
					<th>Email</th>
					<th>PhoneOff</th>
					<th>PhoneRes</th>
					<th>Address1</th>
					<th>State</th>
					<th>City</th>
					<th>PinCode</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				foreach($query->result() as $row)
				{
					echo "<tr>";
					echo "<td>";
					echo $row->accName;
					echo "</td><td>";
					echo $row->subName;
					echo "</td><td>";
					echo $row->tip_own;
					echo "</td><td>";
					echo $row->OpBal;
					echo "</td><td>";
					echo $row->OpBalDC;
					echo "</td><td>";
					echo $row->TINNo;
					echo "</td><td>";
					echo $row->CSTNo;
					echo "</td><td>";
					echo $row->PANNo;
					echo "</td><td>";
					echo $row->Email;
					echo "</td><td>"; 
					echo $row->phone;
					echo "</td><td>";
					echo $row->mobile;
					echo "</td><td>";
					echo $row->Address1;
					echo "</td><td>";
					echo $row->State;
					echo "</td><td>"; 
					echo $row->City;
					echo "</td><td>"; 
					echo $row->zip;
					echo "</td><td>";
					echo "<a href='".site_url('Master/Master_Edit/' .$row->id)."'>Edit</a>
					|<a href='".site_url('Master/Master_Delete/' .$row->id)."'>Delete</a>";
					echo "</td>";
					echo "</tr>";
				}

				?>
			</tbody>
		</table>
		
	</div>
	<!-- /basic datatable -->
</div>
<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/datatables_responsive1.js"></script>
	<!-- /theme JS files -->
	
<?php include 'inc/footer.php'; ?>