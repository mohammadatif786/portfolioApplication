<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <title>Davis - Personal Portfolio</title>
    <link rel="icon" href="{{ asset('frontened/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('frontened/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontened/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontened/css/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontened/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontened/css/style.css') }}" />
</head>

<body id="home">
    <!-- Start Header Section -->
    @include('layouts.frontend.components.header')
    <!-- End Header Section -->

    @yield('content')


    <!-- Start Footer Seciton -->
    @include('layouts.frontend.components.footer')
    <!-- End Footer Seciton -->


    <!-- Scripts -->
    <script src="{{ asset('frontened/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontened/js/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('frontened/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('frontened/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontened/js/main.js') }}"></script>
</body>

</html>
