$(document).ready(function(){

	$("#experienceModalButton").on('click',function(){

		$.ajax({
			url:'/admin/experience/modal',
			type:'get',
			success:function(response){
				$("#experienceModal").html(response)
			}
		})

	});

	getExpData()
	function getExpData()
	{
		 expTable = $("#expTable").DataTable({
			processing:true,
			serverSide:true,
			ajax:{
				url:'/admin/experience/index',
				type:'get',
			},
			columns:[
					{ data:'id', title:'ID' },
					{ data:'job_title', title:'Job Title' },
					{ data:'company', title:'Company' },
					{ data:'start_date', title:'Start Date' },
					{ data:'end_date', title:'End Date' },
					{ data:'description', title:'Description' },
					{ data:'action', title:'Action' }

				]
		});
	}

	$(document).on('click','#editExp',function(){

		var id = $(this).data('id');

		$.ajax({
			url:'/admin/experience/edit/'+id,
			type:'get',
			success:function(response){
				$('#experienceModal').modal('show');
				$('#experienceModal').html(response);
			}
		});

	});

	$(document).on('click','#deleteExp',function(){
		var id = $(this).data('id')
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
				url:'/admin/experience/delete/'+id,
				type:'get',
				success:function(response)
				{
	    			Swal.fire({
				      title: "Deleted!",
				      text: "Your file has been deleted.",
				      icon: "success"
				    });

				    expTable.ajax.reload(null, false);
				}
			});	
		  }
		});
	});
});