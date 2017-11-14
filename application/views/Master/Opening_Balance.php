<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<div class="content-wrapper">

	<div class="col-lg-12">
		<!-- 2 columns form -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Opening Balance Master View</h5>
				<div class="heading-elements">
					<a class="btn btn-info" href="<?=site_url('Master/Opening_Balance')?>"><i class="icon-cog3 position-left"></i> View All Data</a>

				</div>
			</div>
			<table id="example" class="table datatable-basic">
				<thead>
					<tr>
						<th></th>
						<th>First name</th>
						<th>Last name</th>
						<th>Position</th>
						<th>Office</th>
						<th width="18%">Start date</th>
						<th>Salary</th>
					</tr>
				</thead>
				<tbody>
						<td id="first_name"></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tbody>
			</table>
			
		</div>
	</div>
	
</div>
<!-- Theme JS files -->

<script type="text/javascript">

		$(document).ready(function(){

				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>Master/data_table",
					datatype:'json',
					success: function (data) {
						var res = jQuery.parseJSON(data);
						$("#first_name").val(res);
						$("#last_name").val(res);
						$("#position").val(res);
						$("#office").val(res);
						$("#extn").val(res);
						$("#start_date").val(res);
						$("#salary").val(res);

					}
				});
	
		});

	</script>
<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets') ?>/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?=site_url('assets') ?>/js/pages/datatables_basic.js"></script>



</head>

<?php include 'inc/footer.php'; ?>