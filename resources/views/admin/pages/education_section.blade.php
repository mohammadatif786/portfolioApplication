@extends('layouts.admin.index')

@section('adminContent')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <button type="button" id="educationModalButton" class="btn btn-primary mb-2 float-end" data-bs-toggle="modal" data-bs-target="#educationModal">
                    <i class="fas fa-plus"></i> 
                </button>
                <table class="table table-responsive" id="educationTable">
                    <thead>
                        <tr>
                            <th>ID#</th>
                            <th>Degree</th>
                            <th>Institution</th>
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
    <div class="modal fade" tabindex="-1" id="educationModal" aria-bs-labelledby="educationModalLable" aria-hidden="true" style="justify-items:center;">
        <div class="modal-dialog">
            
        </div>
        
    </div>
@endsection