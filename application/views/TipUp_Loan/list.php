<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="content-wrapper">
	<div class="panel panel-primary">
	
		    <div class="panel-heading">
		        <h3>List of computer
    		        <div class="pull-right">
    		            <button id="btn-admin" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
    		            <script>
    		            $(function() {
    		                $('.col-check').hide();
    		                $('#btn-admin').on('click', function(){
    		                    if($("#toolbar-admin").is(":visible"))
    		                    {
    		            		    $("#toolbar-admin").hide();
    		            		    $(".col-check").hide();
    		                    }
    		                    else
    		                    {
    		                        $("#toolbar-admin").show();
    		                        $(".col-check").show();
    		                    }
    		            	});
    		                
    		                $('#btn-online').on('click', function(){
    		                     $('table tr').filter(':has(:checkbox:checked)').find('td').parent().removeClass().addClass('success');
    		                     $('table tr').filter(':has(:checkbox:checked)').find('td.status').text('Online');
    		                });
    		                $('#btn-offline').on('click', function(){
    		                     $('table tr').filter(':has(:checkbox:checked)').find('td').parent().removeClass().addClass('warning');
    		                     $('table tr').filter(':has(:checkbox:checked)').find('td.status').text('Offline');
    		                });
    		                $('#btn-out-of-order').on('click', function(){
    		                     $('table tr').filter(':has(:checkbox:checked)').find('td').parent().removeClass().addClass('danger');
    		                     $('table tr').filter(':has(:checkbox:checked)').find('td.status').text('Out Of Order');
    		                });
    		                
    		            });

    		            </script>
    		        </div>
		        </h3>
		    </div>
		    <div id="toolbar-admin" class="panel-body">
		        <div class="btn-toolbar" role="toolbar" aria-label="admin">
                    <div class="btn-group pull-right" role="group">
                        <button id="btn-online" class="btn btn-success">Online</button>
                        <button id="btn-offline" class="btn btn-warning">Offline</button>
                        <button id="btn-out-of-order" class="btn btn-danger">Out Of Order</button>
                    </div>
                </div>
		    </div>
		    <table class="table table-striped table-hover">
		        <thead>
		            <tr>
		                <th class="col-check"></th>
		                <th>Id</th>
		                <th>Hostname</th>
		                <th>IP</th>
		                <th>MAC</th>
		                <th>Status</th>
		                <th>Description</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr class="success">
		                <td class="col-check"><input type="checkbox" class="form-check-input"></td>
		                <td>1</td>
		                <td>ZYX987</td>
		                <td>192.168.1.99</td>
		                <td>AA:BB:11:22:CC:DD</td>
		                <td class="status">Online</td>
		                <td>test</td>
		            </tr>
		            <tr class="success">
		                <td class="col-check"><input type="checkbox" class="form-check-input"></td>
		                <td>2</td>
		                <td>WVU654</td>
		                <td>192.168.1.98</td>
		                <td>EE:FF:33:44:AB:CD</td>
		                <td class="status">Online</td>
		                <td>test</td>
		            </tr>
		            <tr class="warning">
		                <td class="col-check"><input type="checkbox" class="form-check-input"></td>
		                <td>3</td>
		                <td>TSR321</td>
		                <td>192.168.1.97</td>
		                <td>EF:12:FE:34:AA:CC</td>
		                <td class="status">Offline</td>
		                <td>test</td>
		            </tr>
		            <tr class="danger">
		                <td class="col-check"><input type="checkbox" class="form-check-input"></td>
		                <td>4</td>
		                <td>QPO987</td>
		                <td>192.168.1.96</td>
		                <td>FA:91:EB:82:DC:73</td>
		                <td class="status">Out Of Order</td>
		                <td>test</td>
		            </tr>
		            <tr class="warning">
		                <td class="col-check"><input type="checkbox" class="form-check-input"></td>
		                <td>5</td>
		                <td>NML654</td>
		                <td>192.168.1.95</td>
		                <td>98:AB:76:CD:54:EF</td>
		                <td class="status">Offline</td>
		                <td>test</td>
		            </tr>
		        </tbody>
		    </table>
		</div>
	</div>
		
			<style>
				h3{
				    margin:5px;
				    padding: 5px;
				}

				.btn-custom{
				 border: none;   
				}

				#toolbar-admin{
				    display: none;
				}

			</style>
			
</div>
<?php include 'inc/footer.php'; ?>