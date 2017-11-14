<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="panel-body">
			<table class="table table-bordered tbl-qa">
				<thead>
					<tr>
						<th class="table-header" width="10%">Q.No.</th>
						<th class="table-header">Question</th>
						<th class="table-header">Answer</th>
					</tr>
				</thead>
				<tbody>
					
					<tr class="table-row">
						<td></td>
						<td contenteditable="true"  onClick="showEdit(this);"></td>
						<td contenteditable="true"  onClick="showEdit(this);"></td>
					</tr>
					
				</tbody>
			</table>
		</div>
		
	</div>
	<script>
		function saveToDatabase(editableObj,column,id) {
			$(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "saveedit.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
				success: function(data){
					$(editableObj).css("background","#FDFDFD");
				}        
			});
		}
	</script>
	
</div>
<?php include 'inc/footer.php'; ?>