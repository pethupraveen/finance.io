<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Account Master View</h5>
			<div class="heading-elements">
				
					<a class="btn btn-info" href="<?=site_url('Master/accMasterView')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
					<a class="btn btn-info" href="<?=site_url('Master')?>"><i class="icon-cog3 position-left"></i> Add New Data</a>
									
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
							echo $row->Name;
							echo "</td><td>";
							echo $row->SubGroupCode;
							echo "</td><td>";
							echo $row->TieUp_Owner;
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
							echo $row->PhoneOff;
							echo "</td><td>";
							echo $row->PhoneRes;
							echo "</td><td>";
							echo $row->Address1;
							echo "</td><td>";
							echo $row->State;
							echo "</td><td>"; 
							echo $row->City;
							echo "</td><td>"; 
							echo $row->PinCode;
							echo "</td><td>";
							echo "<a href='".site_url('Master/accMasterEditNew/' .$row->Code)."'>Edit</a>
							|<a href='".site_url('Master/accMasterDeleteNew/' .$row->Code)."'>Delete</a>";
							echo "</td>";
							echo "</tr>";
						}

						?>
					</tbody>
				</table>
				
			</div>
			<!-- /basic datatable -->
		</div>

	</div>
</div>
<?php include 'inc/footer.php'; ?>