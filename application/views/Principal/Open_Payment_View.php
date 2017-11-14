<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Basic datatable -->
	<div class="panel panel-flat">


		<div class="panel-heading">
			<h5 class="panel-title"><small>Opening Principal Loan</small> -Opening Payment View </h5>
			<div class="heading-elements">
				<div class="heading-btn">
					<a class="btn btn-info" href="<?=site_url('Principal/Open_Payment_View')?>"><i class="icon-archive position-left"></i> View All Data</a>
					<a class="btn bg-slate" href="<?=site_url('Principal/Open_Payment_Entry')?>"><i class="icon-add position-left"></i> Add New </a>
				</div>
			</div>
		</div>
	
		<table class="table datatable-responsive">
			<thead>
				<tr>
					<th>AcNo</th>
					<th>Terms</th>
					<th>Loan Date</th>
					<th>Name</th>
					<th>Amount</th>
					<th>No of Due</th>
					<th>Intrest</th>
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
					echo $row->Terms;
					echo "</td><td>";
					echo date("d/m/Y", strtotime($row->LDate));
					echo "</td><td>";
					echo $row->PName;
					echo "</td><td>";
					echo $row->Amount;
					echo "</td><td>";
					$string = $row->Terms;
					if($string = 'M' || 'W' || 'D') { echo $row->Monthly; }
					echo "</td><td>";
					echo $row->Intrest;
					echo "</td>";
					?>
					<td class="text-center">
						<ul class="icons-list">
							<li class="dropdown">


								
								<li>
								<a href="<?php echo site_url('Principal/Open_Payment_Delete/'.$row->AcNo); ?>"><i class="icon-cross2"></i> Delete</a>
								</li>

							</li>
						</ul>
					</td>
					<?php
					echo "</tr>";
				}

				?>
			</tbody>
		</table>
	
		<?php if($this->session->flashdata('success')){ ?>
		<div class="alert bg-success alert-styled-left col-xs-6">
			
			<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
			<span class="text-semibold"><?php echo $this->session->flashdata('success'); ?></span> 
	    </div>
       
    <?php }  ?>
	</div>
	<!-- /basic datatable -->
</div>

</div>
</div>
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/select2.min.js"></script>


	<script type="text/javascript" src="<?=site_url('assets')?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/datatables_responsive.js"></script>

		<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/notifications/bootbox.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/notifications/sweet_alert.min.js"></script>
	

	<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/components_modals.js"></script>
<?php include 'inc/footer.php'; ?>