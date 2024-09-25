<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Admin | Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <link rel="shortcut icon" href="{{ asset('backend/admin/loginAssets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/admin/loginAssets/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/admin/loginAssets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('backend/admin/loginAssets/js/config.js') }}"></script>

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



</head>

<body class="bg-secondary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">
                        <form id="verifyEmailFormData" method="get">
                            <div class="text-center w-75 mx-auto auth-logo mb-4">
                                <a class='logo-dark' href='index.html'>
                                    <span><img src="{{ asset('backend/admin/loginAssets/images/logo-dark.png ') }}"
                                            alt="" height="22"></span>
                                </a>

                                <a class='logo-light' href='index.html'>
                                    <span><img src="{{ asset('backend/admin/loginAssets/images/logo-light.png') }}"
                                            alt="" height="22"></span>
                                </a>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" name="email"
                                    required="" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <a class='text-muted float-end' href='pages-recoverpw.html'><small></small></a>
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" name="password" required=""
                                    id="password" placeholder="Enter your password">
                            </div>

                            <div class="form-group mb-3">
                                <div class="">
                                    <input class="form-check-input" type="checkbox" id="checkbox-signin" checked>
                                    <label class="form-check-label ms-2" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <a class="btn btn-primary w-100 verifictionButton" type="button">Log In</a>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>


    <!-- App js -->
    <script src="{{ asset('backend/admin/loginAssets/js/vendor.min.js ') }}"></script>
    <script src="{{ asset('backend/admin/loginAssets/js/app.js ') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('backend/admin/loginAssets/js/verifictionEmail.js') }}"></script>

    <div class="modal fade" id="emailVerificationModal" tabindex="-1" aria-labelledby="emailVerificationModalLabel"
        aria-hidden="true">

    </div>
    
</body>

</html>
