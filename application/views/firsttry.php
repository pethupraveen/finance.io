<script type="text/javascript">
	function ajaxSearch()
	{
		var input_data = $('#search_data').val();

		if (input_data.length > 3)
		{
			$('#suggestions').hide();
		}
		else
		{

			var post_data = {
				'search_data': input_data,
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
			};

			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>Dashboard/autocomplete",
				data: post_data,
				success: function (data) {
                // return success
                if (data.length > 0) {
                	$('#suggestions').show();
                	$('#autoSuggestionsList').addClass('auto_list');
                	$('#autoSuggestionsList').html(data);
                }
            }
        });

		}
	}
</script>
<style>
	#autoSuggestionsList > li {
		background: none repeat scroll 0 0 #F3F3F3;
		border-bottom: 1px solid #E3E3E3;
		list-style: none outside none;
		padding: 10px 25px 10px 15px;
		text-align: left;
	}

	#autoSuggestionsList > li a { color: #000000; }

</style>