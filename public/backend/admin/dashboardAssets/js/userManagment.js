
$(document).ready(function () {

    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'index',
        columns: [{
            data: 'id',
            name: 'id',
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

    //Create Model Role
    $("#roleModalButton").on('click',function(){

        var url = 'create';
        callRoleModal(url)
       
    });

    //edit Model Role
    $(document).on('click','#editRole',function(){
        
        const id = $(this).data('id');
        url = 'edit/' + id
        callRoleModal(url)

    });

    function callRoleModal(getURL){
        $.ajax({
            url: getURL,
            type:'get',
            success:function(response){

                $("#roleModal").html(response)
                $("#roleModal").modal('show');
            }
        })
    }


    //Create Permission Modal
    $("#permissionModalButton").on('click',function(){
        var url = 'create'
        callPermissionModal(url)
    });

     //Edit Model Permission
     $(document).on('click','#editPermission',function(){

        const id = $(this).data('id');
        url = 'edit/' + id
        callPermissionModal(url);
       
    });

    function callPermissionModal(getURL){
        $.ajax({
            url: getURL,
            type:'get',
            success:function(response){

                $("#permissionModal").html(response)
                $("#permissionModal").modal('show');
            }
        });
    }


    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'index',
        columns: [
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'email',
            name: 'email'
        },
        {
            data: 'role',
            name: 'role'
        },
        {
            data: 'action',
            name: 'action',
            searchable: true
        }
        ]
    });
});