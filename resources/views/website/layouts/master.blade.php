<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="lg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <title>@yield('title') | Dev - Kakanda Tech</title>

    @include('website.resources.head-css')

    {{-- Styles Custom --}}
    <style>
        #back-to-top {
            position: fixed;
            bottom: 40px;
            right: 25px;
            transition: all .5s ease;
            display: none;
            z-index: 1000
        }

        #back-to-top:hover {
            -webkit-animation: fade-up 1.5s linear infinite;
            animation: fade-up 1.5s linear infinite
        }
    </style>

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('website.components.topbar')
        @include('website.components.sidebar')
        !-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('website.components.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-success btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    @include('website.resources.vendor-scripts')
</body>

</html>
