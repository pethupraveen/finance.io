<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Codeigniter Autocomplete</title>
        <link rel="stylesheet" href="<?php echo base_url();?>/jquery-ui/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url();?>/jquery-ui/ui.theme.css" type="text/   css" media="all" />
        <script src="<?php echo base_url();?>/jquery-ui/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">


        <script type="text/javascript">
        $(this).ready( function() {
            $("#search").autocomplete({
                minLength: 1,
                source: 
                function(req, add){
                    $.ajax({
                        url: "<?php echo base_url(); ?>welcome/lookup",
                        dataType: 'json',
                        type: 'POST',
                        data: req,
                        success:    
                        function(data){
                            if(data.response =="true"){
                                add(data.message);
                            }
                        },
                    });
                },
            select: 
                function(event, ui) {
                    $("#result").append(

                    "<li>" + ui.message.judul.value +"</li>" 
                    );                  
                },      
            });
        });
        </script>

    </head>
    <body>
        <div class="row">
            <div class="span12 offset2">
                <form method="POST" action="<?php echo site_url('welcome/pencarian') ?>" class="form-inline" >
                    <input name="judul" class="span5" type="text"  placeholder="Masukkan kata kunci pencarian" id="search">
                     <label for="mySubmit" class="btn  btn-primary"><i class="icon-search icon-white"></i></label> 
                     <input id="mySubmit" type="submit" value="Go" class="hidden" />
                </form>
             </div>
        </div>
        <ul>
            <div id="result"></div>
        </ul>
    </body>
</html>