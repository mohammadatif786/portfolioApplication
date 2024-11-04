
<div class="modal-content mt-3 p-2" style="width: 50%;">
	 <form action="{{ route('admin.skills.store') }}" method="post" enctype="multipart/form-data">
        @csrf
		<div class="modal-header">
			<h5 class="modal-title" id="serviceModalLabel">Add Skill</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
		</div>
		<div class="modal-body">
	   

	        <div class="mb-3">
	            <label for="name" class="form-label">Name</label>
	            <div id="nameWrapper">
	                <div class="input-group mb-2">
	                    <input type="text"
	                        class="form-control form-control-lg
	                        @error('name') is-invalid @enderror"
	                        name="name"
	                        placeholder="e.g., HTML, CSS">
	                    {!! \App\Helpers\ErrorHelper::name() !!}
	                </div>
	            </div>
	        </div>

	        <div class="mb-3">
	            <label for="proficiency" class="form-label">Proficiency</label>
	            <div id="proficiencyWrapper">
	                <div class="input-group mb-2">
	                    
	                    <input type="number"
	                        class="form-control form-control-lg
	                        @error('proficiency') is-invalid @enderror"
	                        name="proficiency">
	                    {!! \App\Helpers\ErrorHelper::proficiency() !!}
	                </div>
	            </div>
	        </div>
	        
		 </div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
    </form>

</div>
