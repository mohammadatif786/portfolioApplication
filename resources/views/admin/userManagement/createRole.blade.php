<form action="{{ isset($roleDetail) ? route('admin.role.update',['id' => $roleDetail->id]) : route('admin.role.store') }}" method="post">
    @csrf
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalLabel"> {{ isset($roleDetail) ? 'Update' : 'Create'  }} Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" id="" value="{{ $roleDetail->name ?? '' }}" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">{{ isset($roleDetail) ? 'Update' : 'Save'  }}</button>
            </div>
        </div>
    </div>

</form>
