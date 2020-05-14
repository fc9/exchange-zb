<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('page.name')</title>

    <!-- BEGIN FAVICON -->
    <link rel="icon" href="./theme/favicon.png"/>
    <!-- END FAVICON -->

    <!-- BEGIN DESCRIPTION -->
    <meta name="description" content="{{config('app.description')}}">
    <!-- END DESCRIPTION -->

    <!-- BEGIN KEYWORDS -->
    <meta name="keywords" content="{{config('app.keywords')}}">
    <!-- END KEYWORDS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all"/>
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all"/>
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all"/>
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Switcher CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/switcher-style.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
    <!-- Flags -->
    <link rel="stylesheet" type="text/css" href="assets/css/flags.css">

    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all"/>

    <!-- BEGIN PAGE CSS-->
    @stack('css')
    <!-- END PAGE CSS-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".header" data-offset="50">
<!-- Page loader -->
<div id="preloader"></div>

<img id="background-paralax" src="theme/background-cloud.png" alt="">

@include('layouts.sections.header')

@yield('page.body')

@include('layouts.components.shared-dialog')

<a href="#" class="scrollToTop">
    <i class="icofont icofont-arrow-up"></i>
</a>

<!-- jquery main JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/popper/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="assets/js/jquery.collapsible.min.js"></script>
<script src="assets/js/swiper.js"></script>
<!-- Slick nav JS -->
<script src="assets/js/jquery.slicknav.min.js"></script>
<!-- Slick JS -->
<script src="assets/js/slick.min.js"></script>
<!-- owl carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Counter JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Counterup waypoints JS -->
<script src="assets/js/waypoints.min.js"></script>
<!-- YTPlayer JS -->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<!-- jQuery Easing JS -->
{{--<script src="assets/js/jquery.easing.1.3.js"></script>--}}
<!-- Gmap JS -->
{{--<script src="assets/js/gmap3.min.js"></script>--}}
<!-- Google map api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
<!-- Custom map JS -->
<script src="assets/js/custom-map.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow-1.3.0.min.js"></script>
<!-- Switcher JS -->
<script src="assets/js/switcher.js"></script>
<!-- main JS -->
<script src="assets/js/main.js"></script>

<!-- BEGIN PAGE SCRIPTS -->
@stack('scripts')
<!-- END PAGE SCRIPTS -->

</body>
</html>
