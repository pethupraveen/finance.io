<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
  <div class='container'>
 <div class="panel panel-default">
   <div class="panel-heading">
     <h3 class="panel-title">Panel title</h3>
   </div>
   <div class="panel-body ">
    <table  border='0' class="col-lg-8">
     <tr>
      <th width='10%'>S.no</th>
      <th width='40%'>Username</th>
      <th width='40%'>Name</th>
     </tr>
     <?php $count = 1; ?>
    <?php foreach ($query as $value): ?>
      
     <tr>
      <td><?php echo $count; ?></td>
      <td> 
        <div contentEditable='true' class='edit' id='firstname_<?php echo $value['id']; ?>'> 
          <?php echo $value['firstname']; ?>
        </div> 
      </td>
      <td> 
        <div contentEditable='true' class='edit' id='lastname_<?php echo $value['id']; ?>'>
          <?php echo $value['lastname']; ?> 
        </div> 
      </td>
     </tr>
      
    <?php $count ++; endforeach ?>
     
    </table>
   </div>
 </div>

</div>
</div>

<script>
  $(document).ready(function(){
 
 // Add Class
 $('.edit').click(function(){
  $(this).addClass('editMode');
 });

 // Save data
 $(".edit").focusout(function(){
  $(this).removeClass("editMode");
  var id = this.id;
  var split_id = id.split("_");
  var field_name = split_id[0];
  var edit_id = split_id[1];
  var value = $(this).text();

  $.ajax({
  url:"<?=base_url('TipUp_Loan/fetch_user');?>",  
  type: "POST",
   data: { field:field_name, value:value, id:edit_id },
   success:function(response){
    console.log('Save successfully'); 
   }
  });
 
 });

});
</script>
<?php include 'inc/footer.php'; ?>