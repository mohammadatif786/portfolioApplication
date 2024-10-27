@extends('layouts.admin.index')

@section('adminContent')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="font-weight-light text-white">Update Services Section</h4>
                    </div>
                    <div class="card-body px-5 py-4">
                        <form action="{{ route('admin.store.about.section') }}" method="post" enctype="multipart/form-data">
                            @csrf

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

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5 mt-4">Save
                                    Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
