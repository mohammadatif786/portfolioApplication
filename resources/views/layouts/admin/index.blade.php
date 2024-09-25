<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href=" {{ asset('backend/admin/dashboardAssets/images/favicon.ico') }}">

    <link href=" {{ asset('backend/admin/dashboardAssets/libs/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href=" {{ asset('backend/admin/dashboardAssets/css/style.min.css') }} " rel="stylesheet" type="text/css">
    <link href=" {{ asset('backend/admin/dashboardAssets/css/icons.min.css') }} " rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        @include('components.admin.sidebar')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            @include('components.admin.header')
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

               @yield('adminContent')

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div><script>document.write(new Date().getFullYear())</script> © Dashtrap</div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://myrathemes.com/" target="_blank">MyraStudio</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src=" {{ asset('backend/admin/dashboardAssets/js/vendor.min.js') }}"></script>
    <script src=" {{ asset('backend/admin/dashboardAssets/js/app.js') }}"></script>

    <!-- Knob charts js -->
    <script src=" {{ asset('backend/admin/dashboardAssets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Sparkline Js-->
    <script src="{{ asset('backend/admin/dashboardAssets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <script src=" {{ asset('backend/admin/dashboardAssets/libs/morris.js/morris.min.js') }}"></script>

    <script src=" {{ asset('backend/admin/dashboardAssets/libs/raphael/raphael.min.js') }} "></script>

    <!-- Dashboard init-->
    <script src="{{ asset('backend/admin/dashboardAssets/js/pages/dashboard.js') }}"></script>


</body>

</html>