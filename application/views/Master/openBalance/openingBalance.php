<?php include 'inc/sidebar.php'; ?>

<div class="content-wrapper">

	<!-- Main charts -->
	<div class="row">
		<div class="col-lg-12">
			<!-- 2 columns form -->
			<div class="panel panel-flat">
				<div class="panel-heading">
				<h5 class="panel-title">Opening Balance Master View</h5>
					<div class="heading-elements">
							<a class="btn btn-info" href="<?=site_url('Master/openingBalance')?>"><i class="icon-cog3 position-left"></i> View All Data</a>
											
					</div>
				</div>
				<table class="table datatable-basic">
					<thead>
						<tr>
							<th>accName</th>
							<th>open_balan</th>
							<th>debit_cridit</th>
							<th>Actions</th>
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
							echo $row->OpBal;
							echo "</td><td>";
							echo $row->OpBalDC;
							echo "</td><td>";
							echo "<a href='".site_url('Master/openBalanEdit/' .$row->Code)."'>Edit</a>
							|<a href='".site_url('Master/openBalanDelete/' .$row->Code)."'>Delete</a>";
							echo "</td>";
							echo "</tr>";
						}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

</div>
</div>
<?php include 'inc/footer.php'; ?>