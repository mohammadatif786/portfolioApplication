@extends('layouts.admin.index')

@section('adminContent')
    <div class="container-fluid py-5">
        <h3>User List</h3>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <button class="btn btn-outline-blue float-end mb-2" data-bs-toggle="modal" id="permissionModalButton"><i class="fas fa-plus-circle"></i></button>

            </div>
            <div class="col-md-12">

                <table class="table table-responsive" id="user-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Quick Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="permissionModal" tabindex="-1" aria-labelledby="permissionModalLabel" aria-hidden="true">
        
    </div>
@endsection
