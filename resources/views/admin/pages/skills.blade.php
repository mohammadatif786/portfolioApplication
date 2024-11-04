@extends('layouts.admin.index')

@section('adminContent')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <button type="button" id="skillModalButtion" class="btn btn-primary mb-2 float-end" data-bs-toggle="modal" data-bs-target="#skillModal">
                    <i class="fas fa-plus"></i> 
                </button>
                <table class="table table-responsive" id="skillTable">
                    <thead>
                        <tr>
                            <th>ID#</th>
                            <th>Name</th>
                            <th>Proficiency</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="skillModal" tablindex="-1" aria-labelledby='skillModalLable' aria-hidden="true" style="justify-items:center;">
        <div class="modal-dialog">
            
        </div>
    </div>

@endsection
