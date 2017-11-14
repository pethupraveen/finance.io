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
							<th>accName</th>
							<th>SubGroup</th>
							<th>tip_own</th>
							<th>open_balan</th>
							<th>debit_cridit</th>
							<th>tin_no</th>
							<th>cst_no</th>
							<th>pan_no</th>
							<th>name</th>
							<th>email</th>
							<th>phone</th>
							<th>mobile</th>
							<th>address</th>
							<th>state</th>
							<th>city</th>
							<th>zipcode</th>
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
							echo $row->open_balan;
							echo "</td><td>";
							echo $row->debit_cridit;
							echo "</td><td>";
							echo $row->tin_no;
							echo "</td><td>";
							echo $row->cst_no;
							echo "</td><td>";
							echo $row->pan_no;
							echo "</td><td>";
							echo $row->name;
							echo "</td><td>";
							echo $row->email;
							echo "</td><td>"; 
							echo $row->phone;
							echo "</td><td>";
							echo $row->mobile;
							echo "</td><td>";
							echo $row->address;
							echo "</td><td>";
							echo $row->state;
							echo "</td><td>"; 
							echo $row->city;
							echo "</td><td>"; 
							echo $row->zipcode;
							echo "</td><td>";
							echo "	
							|<a href='".site_url('Master/accMasterDelete/' .$row->id)."'>Delete</a>";
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