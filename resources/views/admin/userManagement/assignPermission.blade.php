@extends('layouts.admin.index')

@section('adminContent')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <h3 class="mb-4">Manage Permissions</h3>

            <form action="" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label>Select Permissions:</label>
                    <div class="form-check">
                        @foreach($permissions as $permission)
                            <div class="mb-2">
                                <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->id }}"
                                       id="permission_{{ $permission->id }}"
                                       @if(in_array($permission->id, $assignedPermissions)) checked @endif>
                                <label class="form-check-label" for="permission_{{ $permission->id }}">
                                    {{ $permission->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
        
                <button type="submit" class="btn btn-primary mt-3">Assign Permissions</button>
            </form>
        </div>
    </div>
@endsection
