<div class="modal-content mt-3 p-2" style="width:50%">
	<form action="{{ route('admin.education.store') }}" method="POST">
		@csrf
		<div class="modal-header">
			<h5 class="modal-title" id="educationModalLable">Add Education</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
		</div>
		<div class="modal-body">
			
			<div class="mb-3">
				<label for="degree" class="form-label">Degree</label>
				<div class="degreeWrapper">
					<div class="input-group mb-2">
						<input type="text" name="degree" class="form-control" placeholder="e.g, BS(IT)">
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="institution" class="form-label">Institution</label>
				<div class="institutionWrapper">
					<div class="input-group mb-2">
						<input type="text" name="institution" class="form-control" placeholder="e.g, University of Sindh">
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="start-date" class="form-label">Start Date</label>
				<div class="startDateWrapper">
					<div class="input-group mb-2">
						<input type="date" name="start_date" class="form-control">
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="end-date" class="form-label">End Date</label>
				<div class="endDateWrapper">
					<div class="input-group mb-2">
						<input type="date" name="end_date" class="form-control">
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Description</label>
				<div class="descriptionWrapper">
					<div class="input-group mb-2">
						<textarea name="description" rows="5" cols="15" class="form-control"></textarea>
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