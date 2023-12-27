<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Women in tech" name="description" />
    <meta content="WIT" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    @include('frontend.layout.script-css')
    @yield('css')

    <!--Swiper slider css-->

</head>

<body data-bs-spy="scroll" >

<!-- Begin page -->
<div class="layout-wrapper">
    <header id="page-topbar">
        @include('frontend.layout.navbar')
    </header>
    <div class="main-content">
        <div class="page-content">
            @yield('content')
        </div>
    </div>

    @include('frontend.layout.footer')
    <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

</div>
<!-- end layout wrapper -->

@include('frontend.layout.script-js')
<!-- JAVASCRIPT -->
</body>

</html>
