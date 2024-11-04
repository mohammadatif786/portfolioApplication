$(document).ready(function(){

	$('#skillModalButtion').on('click',function(){
		$.ajax({
			url:'/admin/skills/modal',
			type:'get',
			success:function(response){
				$("#skillModal").html(response)
			}
		})
	});

	getSkillData()

	function getSkillData()
	{
		skillTable = $("#skillTable").DataTable({
			processing:true,
			serverSide:true,
			ajax: {
				url:'/admin/skills/index',
				type:'get',
			},
			columns :[
				{ data:'id', title: 'ID' },
				{ data:'name', title:'Name' },
				{ data:'proficiency', title:'proficiency' },
				{ data:'action', title:'Action' }
			]
		});
	}

	$(document).on('click','#editSkill', function(){

		var id = $(this).data('id');

		$.ajax({
			url:'/admin/skills/edit/'+id,
			type:'get',
			success:function(response){
				$("#skillModal").modal('show')
				$("#skillModal").html(response)
			}
		});
	});

	$(document).on('click','#deleteSkill',function(){
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
		  		url:'/admin/skills/delete/'+id,
		  		type:'get',
		  		success:function(response){
				    Swal.fire({
				      title: "Deleted!",
				      text: "Your file has been deleted.",
				      icon: "success"
				    });
				    skillTable.ajax.reload(null, false);
		  		}
		  	});
		  }
		});
	});
});