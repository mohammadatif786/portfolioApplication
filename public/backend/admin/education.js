$(document).ready(function(){

	$("#educationModalButton").on('click',function(){

		$.ajax({
			url:'/admin/education/modal',
			type:'get',
			success:function(response)
			{
				$("#educationModal").html(response)
			}
		});
	});


	$(document).on('click','#editEducation',function(){
		var id = $(this).data('id');

		$.ajax({
			url:'/admin/education/edit/'+id,
			type:'get',
			success:function(response)
			{
				$("#educationModal").modal('show')
				$("#educationModal").html(response)
			}
		});
	});

	$(document).on('click','#deleteEducation',function(){
		var id = $(this).data('id');

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
				url:'/admin/education/delete/'+id,
				type:'get',
				success:function(response)
				{
	    			Swal.fire({
				      title: "Deleted!",
				      text: "Your file has been deleted.",
				      icon: "success"
				    });

				    educationTable.ajax.reload(null, false);
				}
			});	
		  }
		});
	});
});

getExpData()
function getExpData()
{
	 educationTable = $("#educationTable").DataTable({
		processing:true,
		serverSide:true,
		ajax:{
			url:'/admin/education/index',
			type:'get',
		},
		columns:[
				{ data:'id', title:'ID' },
				{ data:'degree', title:'Degree' },
				{ data:'institution', title:'Institution' },
				{ data:'start_date', title:'Start Date' },
				{ data:'end_date', title:'End Date' },
				{ data:'description', title:'Description' },
				{ data:'action', title:'Action' }

			]
	});
}