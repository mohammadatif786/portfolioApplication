@extends('layouts.admin.index')

@section('adminContent')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="font-weight-light text-white">Update About Section</h4>
                    </div>
                    <div class="card-body px-5 py-4">
                        <form id="aboutFormData" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Professional Title(s)</label>
                                <div id="titleWrapper">
                                    <div class="input-group mb-2">
                                        <input type="text"
                                            class="form-control form-control-lg
                                            @error('title') is-invalid @enderror"
                                            name="title" value="{{ $aboutDetails->title ?? '' }}"
                                            placeholder="e.g., Senior Graphic Designer">
                                        {!! \App\Helpers\ErrorHelper::title() !!}
                                    </div>
                                </div>
                            </div>


                            <!-- Bio -->
                            <div class="mb-3">
                                <label for="bio" class="form-label">Brief Biography</label>
                                <textarea class="form-control form-control-lg @error('bio') is-invalid @enderror" id="bio" name="bio"
                                    rows="4" placeholder="Write a short description about yourself...">{{ $aboutDetails->bio ?? '' }}</textarea>
                                {!! \App\Helpers\ErrorHelper::bio() !!}
                            </div>

                            <div class="row">
                                <!-- Birthday -->
                                <div class="col-md-6 mb-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date"
                                        class="form-control form-control-lg @error('birthday') is-invalid @enderror"
                                        id="birthday" name="birthday" value="{{ $aboutDetails->birthday ?? '' }}">
                                    {!! \App\Helpers\ErrorHelper::birthDay() !!}

                                </div>

                                <!-- Phone -->
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel"
                                        class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" placeholder="+1 234 567 890"
                                        value="{{ $aboutDetails->phone ?? '' }}">
                                    {!! \App\Helpers\ErrorHelper::phone() !!}
                                </div>
                            </div>

                            <div class="row">
                                <!-- Address -->
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text"
                                        class="form-control form-control-lg @error('address') is-invalid @enderror"
                                        id="address" name="address" placeholder="Enter your full address"
                                        value="{{ @$aboutDetails->address }}">
                                    {!! \App\Helpers\ErrorHelper::address() !!}
                                </div>

                                <!-- Languages (Dynamic) -->
                                <div class="col-md-6 mb-3">
                                    <label for="languages" class="form-label">Languages</label>
                                    <div id="languageWrapper">
                                        <div class="input-group mb-2">
                                            <input type="text"
                                                class="form-control form-control-lg @error('languages') is-invalid @enderror"
                                                name="languages" placeholder="e.g., English, Spanish"
                                                value="{{ @$aboutDetails->languages }}">
                                            {!! \App\Helpers\ErrorHelper::languages() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Freelance Availability -->
                                <div class="col-md-6 mb-3">
                                    <label for="freelance"
                                        class="form-label @error('freelance') is-invalid @enderror">Freelance
                                        Availability</label>
                                    <select class="form-select form-select-lg" id="freelance" name="freelance">
                                        <option value="">Please Select</option>
                                        <option value="0" {{ @$aboutDetails->freelance == 0 ? 'selected' : '' }}>Not
                                            Available</option>
                                        <option value="1" {{ @$aboutDetails->freelance == 1 ? 'selected' : '' }}>
                                            Available for Freelance</option>
                                    </select>
                                    {!! \App\Helpers\ErrorHelper::freelance() !!}
                                </div>

                                <!-- CV Upload -->
                                <div class="col-md-6 mb-3">
                                    <label for="cv_url" class="form-label">Upload CV</label>
                                    <div class="input-group">
                                        <input type="file"
                                            class="form-control form-control-lg @error('cv_url') is-invalid @enderror"
                                            id="cv_url" name="cv_url" aria-label="Upload CV">
                                        <label class="input-group-text" for="cv_url">Browse</label>
                                        {!! \App\Helpers\ErrorHelper::cv_url() !!}
                                    </div>
                                    <small class="form-text text-muted">Accepted file types: PDF, Max size: 2MB.</small>

                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" id="aboutFormSubmit" class="btn btn-primary btn-lg px-5 mt-4">Save
                                    Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#aboutFormSubmit').on('click', function(e) {
                e.preventDefault()

                var formData = $("#aboutFormData").serialize();

                $.ajax({
                    url: '{{ route('admin.store.about.section') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        alert()
                    }
                });
            })

        });
    </script>
@endsection
