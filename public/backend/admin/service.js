$(document).ready(function(){

	$('#serviceModalButtion').on('click',function(){
		$.ajax({
			url:'get/service/modal',
			type:'get',
			success:function(response){
				$("#serviceModal").html(response)
			}
		})
	});

	dataTableCall()


	function dataTableCall()
	{
		serviceDataTable = $("#serviceDataTable").DataTable({
			processing:true,
			serverSide:true,
			ajax:{
				url:'services',
				type:'get',
			},
			columns:[
					{ data:'id', title:'ID' },
					{ data:'title', title:'Title' },
					{ data:'description', title:'Description' },
					{ 
						data:'icon', 
						title:'Icon',
						render: function(data, type, row){
							return '<i class="'+data+'"></i>';
						}
					},
					{ 
						data:'is_active', 
						title:'Active',
						render: function(data, type, row){
							return '<input type="checkbox" '+data+' disabled>';
						}
					},
					{ data:'action', title:'Action' }
				]
		});
	}

	$(document).on('click','#editService',function(){

		serviceID = $(this).data('id');

		$.ajax({
			url:'edit/service/modal/'+serviceID,
			type:'get',
			success:function(response){	
				$("#serviceModal").modal('show')
				$("#serviceModal").html(response)
			}
		})
	});

	$(document).on('click','#deleteService',function(){

		serviceID = $(this).data('id');

		Swal.fire({
		  title: "Are you sure?",
		  text: "You won't be able to revert this!",
		  icon: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#3085d6",
		  cancelButtonColor: "#d33",
		  confirmButtonText: "Yes, delete it!"
		}).then((result) => {
		  if (result.isConfirmed) {

		  	$.ajax({
		  		url:'service/delete/'+serviceID,
		  		type:'get',
		  		success:function(response){
				    Swal.fire({
				      title: "Deleted!",
				      text: "Your file has been deleted.",
				      icon: "success"
				    });
				    serviceDataTable.ajax.reload(null, false);
		  		}
		  	});
		  }
		});
	});
});