<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">
    @include('partials.head-css')
</head>

@section('body')
    <body data-sidebar="dark" data-layout-mode="light">
    @show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('partials.topbar')
        @include('partials.sidebar')
        <!-- ============================================================== -->
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
            @include('partials.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->



    <!-- JAVASCRIPT -->
    @include('partials.vendor-scripts')
    </body>

</html>
