@extends('layouts.admin.index')

@section('adminContent')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <button type="button" id="experienceModalButton" class="btn btn-primary mb-2 float-end" data-bs-toggle="modal" data-bs-target="#experienceModal">
                    <i class="fas fa-plus"></i> 
                </button>
                <table class="table table-responsive" id="expTable">
                    <thead>
                        <tr>
                            <th>ID#</th>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="experienceModal" aria-bs-labelledby="experienceModalLable" aria-hidden="true" style="justify-items:center;">
        <div class="modal-dialog">
            
        </div>
        
    </div>
@endsection