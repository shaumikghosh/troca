<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>@yield('title')</title><!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendors/css/vendor.addons.css"><!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/css/demo_2/style.css"><!-- Layout style -->
    <link rel="shortcut icon" href="{{asset('public/admin')}}/asssets/images/favicon.ico">
</head>

<body class="header-fixed dark-theme">
    
    @include('admin.includes.header')

    <div class="page-body">
        
        @include('admin.includes.sidebar')

        @include('admin.includes.right_sidebar')
        <div class="page-content-wrapper">
            @yield('body')
            @include('admin.includes.footer')
        </div><!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{asset('public/admin')}}/assets/vendors/js/core.js"></script>
    <script src="{{asset('public/admin')}}/assets/vendors/js/vendor.addons.js"></script><!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="{{asset('public/admin')}}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('public/admin')}}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/charts/chartjs.addon.js"></script><!-- Vendor Js For This Page Ends-->
    <script src="{{asset('public/admin')}}/assets/js/script.js"></script>
</body>

</html>
