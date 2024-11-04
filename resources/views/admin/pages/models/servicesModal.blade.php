
<div class="modal-content mt-3 p-2" style="width: 50%;">
	 <form action="{{ route('admin.store.service.section') }}" method="post" enctype="multipart/form-data">
        @csrf
		<div class="modal-header">
			<h5 class="modal-title" id="serviceModalLabel">Add Services</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
		</div>
		<div class="modal-body">
	   

	        <div class="mb-3">
	            <label for="title" class="form-label">Title</label>
	            <div id="titleWrapper">
	                <div class="input-group mb-2">
	                    <input type="text"
	                        class="form-control form-control-lg
	                        @error('title') is-invalid @enderror"
	                        name="title"
	                        placeholder="e.g., Web Development">
	                    {!! \App\Helpers\ErrorHelper::title() !!}
	                </div>
	            </div>
	        </div>

	        <div class="mb-3">
	            <label for="description" class="form-label">Description</label>
	            <div id="descriptionWrapper">
	                <div class="input-group mb-2">
	                    
	                    <textarea
	                        class="form-control form-control-lg
	                        @error('description') is-invalid @enderror"
	                        name="description"></textarea>

	                    {!! \App\Helpers\ErrorHelper::description() !!}
	                </div>
	            </div>
	        </div>

	        <div class="mb-3">
	            <label for="icon" class="form-label">Icon</label>
	            <div id="iconWrapper">
	                <div class="input-group mb-2">
	                    
	                    <input
	                        type="icon"
	                        class="form-control form-control-lg
	                        @error('icon') is-invalid @enderror"
	                        name="icon" placeholder="e.g fas fa-box" >
	                    {!! \App\Helpers\ErrorHelper::icon() !!}
	                </div>
	            </div>
	        </div>

	        <div class="mb-3">
	            <div id="iconWrapper">
	                <div class="input-group mb-2">
	                    <label for="checkbox" class="form-label mt-2 mx-2">Is Active</label>
	                    <input 
	                        type="checkbox" 
	                        name="is_active" 
	                        class="@error('is_active') is-invalid @enderror"  name="is_active" class="mx-2"
	                    >
	                    {!! \App\Helpers\ErrorHelper::is_active() !!}

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
