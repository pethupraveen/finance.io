<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
      <div class="col-lg-12">
       <table class="table table-hover">
        <?php foreach ($query as $row): ?>
          
      
       <tr id="<?php echo $row['id']; ?>" class="edit_tr">

       <td class="edit_td">
       <span id="first_<?php echo $row['id']; ?>" class="text"><?php echo $row['firstname']; ?></span>
       <input type="text" value="<?php echo $row['firstname']; ?>" class="editbox" id="first_input_<?php echo $row['id']; ?>"/>
       </td>

       <td class="edit_td">
       <span id="last_<?php echo $row['id']; ?>" class="text"><?php echo $row['lastname']; ?></span> 
       <input type="text" value="<?php echo $row['firstname']; ?>" class="editbox" id="last_input_<?php echo $row['id']; ?>"/>
       </td>

       </tr>
       <?php endforeach ?>
       </table>
      </div>
    </div>
  

  </div>
</div>
<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&firstname='+first+'&lastname='+last;
$("#first_"+ID).html('<img src="load.gif" />'); // Loading image

if(first.length>0&& last.length>0)
{

$.ajax({
type: "POST",
url:"<?=base_url('TipUp_Loan/fetch_user');?>",  
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function() 
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>

<?php include 'inc/footer.php'; ?>