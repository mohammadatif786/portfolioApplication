
$(document).ready(function () {

    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'create',
        columns: [{
            data: 'id',
            name: 'id'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'action',
            name: 'action',
            searchable: true
        }
        ]
    });
    
});