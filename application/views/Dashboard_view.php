
<div class="row">
		<?php
foreach($row as $rows){
$link1 = $rows->link1;

?>
	<div class="col-sm-6 col-lg-3">
		<div class="content-group">

			<h6 class="text-semibold"><?php echo $link1; ?></h6>


		<ul class="list list-unstyled">

			<li><a href="<?php echo $link1.'/'.$link2; ?>"> <?php echo $link2; ?></a></li>
			
		</ul>




		</div>
	</div>
<?php } ?>
</div>
        


