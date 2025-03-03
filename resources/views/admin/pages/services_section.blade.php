@extends('layouts.admin.index')

@section('adminContent')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <button type="button" class="btn btn-primary mb-2 float-end" id="serviceModalButtion" data-bs-toggle="modal" data-bs-target="#serviceModal"> 
                    <i class="fas fa-plus"></i> 
                </button>
                <table class="table table-responsive" id="serviceDataTable">
                    <thead>
                        <tr>
                            <th>ID#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Icon</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true" style="justify-items: center;">
        <div class="modal-dialog">
        </div>
    </div>
@endsection
