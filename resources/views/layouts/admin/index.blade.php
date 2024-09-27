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

    <link href=" {{ asset('backend/admin/dashboardAssets/libs/morris.js/morris.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href=" {{ asset('backend/admin/dashboardAssets/css/style.min.css') }} " rel="stylesheet" type="text/css">
    <link href=" {{ asset('backend/admin/dashboardAssets/css/icons.min.css') }} " rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

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
                            <div>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Dashtrap
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://myrathemes.com/"
                                        target="_blank">MyraStudio</a> </p>
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

    <script src="{{ asset('backend/admin/dashboardAssets/js/userManagment.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


    <script>
        // Check for success message in the session
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif
        @if (session('error'))
            toastr.error("{{ session('success') }}");
        @endif
        @if (session('update'))
            toastr.success("{{ session('update') }}");
        @endif
        
        @if (session('info'))
            toastr.info("{{ session('info') }}");
        @endif
    </script>
</body>

</html>
