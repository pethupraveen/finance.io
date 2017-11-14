<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">

	<div class="panel panel-flat">
		
		<div class="panel-body">
			<h4 class="text-center content-group-lg">
				Welcome to our Finance Software
				<small class="display-block">Anything you want in our Finance Software just search here. Categories wise or without categories..</small>
			</h4>
			<form action="<?=site_url('Dashboard')?>" method="POST">
			<div class="dual-list">
			<div class="input-group content-group">
				<div class="has-feedback has-feedback-left">
					<input type="text" name="SearchDualList" class="form-control input-xlg" placeholder="search" />
					
					<div class="form-control-feedback">
						<i class="icon-search4 text-muted text-size-base"></i>
					</div>
				</div>

				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary btn-xlg">Search</button>
				</div>
			</div>
			     <ul class="list-group" style="max-height: 300px;overflow: auto;">
			    <?php foreach ($results as $key): ?>
					<li class="list-group-item "><a href="<?=$key['link1']?>/<?=$key['link2']?>"><?=$key['link1']?>/<?=$key['link2']?></a></li>
				<?php endforeach ?>
			        
			    </ul>
			   
			</div>
		
			</form>	
		</div>
	</div>

	</div>
	<script type="text/javascript" src="assets/js/pages/form_bootstrap_select.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>
	<!-- Theme JS files
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script>
      $(function () {

            $('body').on('click', '.list-group .list-group-item', function () {
                $(this).toggleClass('active');
            });
        
            $('.dual-list .selector').click(function () {
                var $checkBox = $(this);
                if (!$checkBox.hasClass('selected')) {
                    $checkBox.addClass('selected').closest('.de').find('ul li:not(.active)').addClass('active');
                    $checkBox.children('i').removeClass('glyphicon-unchecked').addClass('glyphicon-check');
                } else {
                    $checkBox.removeClass('selected').closest('.de').find('ul li.active').removeClass('active');
                    $checkBox.children('i').removeClass('glyphicon-check').addClass('glyphicon-unchecked');
                }
            });
            $('[name="SearchDualList"]').keyup(function (e) {
                var code = e.keyCode || e.which;
                if (code == '9') return;
                if (code == '27') $(this).val(null);
                var $rows = $(this).closest('.dual-list').find('.list-group li');
                var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                $rows.show().filter(function () {
                    var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
            });

        });
   
</script>


<?php include 'inc/footer.php'; ?>