/* ------------------------------------------------------------------------------
*
*  # Datatables data sources
*
*  Specific JS code additions for datatable_data_sources.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {


    // Table setup
    // ------------------------------

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 5 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });


    // HTML sourced data
    $('.datatable-html').dataTable();


    // AJAX sourced data
    $('.datatable-ajax').dataTable({
        ajax: 'assets/datatable_ajax.json'
    });


    // Javascript sourced data
    var dataSet = [
        ['Trident','Internet Explorer 4.0','Win 95+','4','X'],
        ['Trident','Internet Explorer 5.0','Win 95+','5','C'],
        ['Trident','Internet Explorer 5.5','Win 95+','5.5','A']
       
    ];

    $('.datatable-js').dataTable({
        data: dataSet,
        columnDefs: []
    });


    // Nested object data
    $('.datatable-nested').dataTable({
        ajax: 'assets/demo_data/tables/datatable_nested.json',
        columns: [
            {data: "name[, ]"},
            {data: "hr.0" },
            {data: "office"},
            {data: "extn"},
            {data: "hr.2"},
            {data: "hr.1"}
        ]
    });


    // Generate content for a column
    var table = $('.datatable-generated').DataTable({
        ajax: 'assets/demo_data/tables/datatable_ajax.json',
        columnDefs: [{
            targets: 2,
            data: null,
            defaultContent: "<button class='label label-default'>Show</button>"
        },
        { 
            orderable: false,
            targets: [0, 2]
        }]
    });
    
    $('.datatable-generated tbody').on('click', 'button', function () {
        var data = table.row($(this).parents('tr')).data();
        alert(data[0] +"'s location is: "+ data[ 2 ]);
    });



    // External table additions
    // ------------------------------

    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Type to filter...');


    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
    
});
