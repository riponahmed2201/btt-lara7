
<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('admin.includes.head_css')
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
   @include('admin.includes.sidebar')
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        @include('admin.includes.header')
        <!-- page title area start -->
        @include('admin.includes.breadcrumb')
        <!-- page title area end -->
        @yield('main_content')
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
        @include('admin.includes.main_footer')
    <!-- footer area end-->
</div>
        @include('admin.includes.footer_js')
</body>

</html>
