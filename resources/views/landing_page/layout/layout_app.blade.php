<!DOCTYPE html>
<html lang="zxx" @if( app()->getLocale() == "fr" ) dir="ltr" @else dir="rtl" @endif>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Jexi">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    @if(app()->getLocale() == 'fr')

        <title>Platforme L'heure Joieuse in frensh</title>

    @else

        <title>Platforme L'heure Joieuse in arabic</title>

    @endif

    <link rel="icon" href="assets/images/tab.png" type="image/png" sizes="16x16">

    <!-- bootstrap css -->
    @if( app()->getLocale() == 'fr' )
        <link href="http://fonts.cdnfonts.com/css/avenir" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}" type="text/css" media="all" />
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" type="text/css" media="all" />
        <!-- swiper css -->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"  type="text/css" media="all" />
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
        <!-- magnific popup css -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" type="text/css" media="all" />
        <!-- fullcalender css -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" type="text/css" media="all" />
        <!-- boxicons css -->
        <link rel='stylesheet' href="{{ asset('assets/css/boxicons.min.css') }}" type="text/css" media="all" />
        <!-- flaticon css -->
        <link rel='stylesheet' href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all" />
        <!-- revolution slider css -->
        <link rel='stylesheet' href="{{ asset('assets/css/settings.css') }}" type="text/css" media="all" />
        <link rel='stylesheet' href="{{ asset('assets/css/layers.css') }}" type="text/css" media="all" />
        <link rel='stylesheet' href="{{ asset('assets/css/navigation.css') }}" type="text/css" media="all" />
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all" />
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--gallery -->
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />


    @endif


    @if( app()->getLocale() == "ar" )
    <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/bootstrap.min.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('assets_trl/css/bootstrap-reboot.min.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('assets_trl/css/bootstrap.rtl.min.css') }}" type="text/css" media="all" />
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/animate.min.css') }}" type="text/css" media="all" />
        <!-- swiper css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/swiper-bundle.min.css') }}"  type="text/css" media="all" />
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/meanmenu.min.css') }}" type="text/css" media="all" />
        <!-- magnific popup css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/magnific-popup.min.css') }}" type="text/css" media="all" />
        <!-- fullcalender css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/main.min.css') }}" type="text/css" media="all" />
        <!-- boxicons css -->
        <link rel='stylesheet' href='{{ asset('assets_trl/css/boxicons.min.css') }}' type="text/css" media="all" />
        <!-- flaticon css -->
        <link rel='stylesheet' href='{{ asset('assets_trl/css/flaticon.css') }}' type="text/css" media="all" />
        <!-- revolution slider css -->
        <link rel='stylesheet' href='{{ asset('assets_trl/css/settings.css') }}' type="text/css" media="all" />
        <link rel='stylesheet' href='{{ asset('assets_trl/css/layers.css') }}' type="text/css" media="all" />
        <link rel='stylesheet' href='{{ asset('assets_trl/css/navigation.css') }}' type="text/css" media="all" />
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/style.css') }}" type="text/css" media="all" />
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/rtl.css') }}" type="text/css" media="all" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets_trl/css/responsive.css') }}" type="text/css" media="all" />

        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@460&display=swap" rel="stylesheet">
    @endif


    <style>

        body{
            font-family: 'Avenir', sans-serif !important;
        }

        .main-btn{
            background-color:  #06933e !important;
        }
        .main-btn:hover{
            background-color: #FFF !important;
        }
        .about-item-card-thirdcolor .about-card-icon i:last-child{
            color: #06933e !important;
        }
        .about-item-card-thirdcolor .about-card-icon i:first-child{
            color: #06933e !important;
        }
        .record-item-number{
            color: #06933e !important;
        }
        .record-grid-item-inner.record-grid-item-inner-secondcolor .record-item-text p {
            color: #06933e !important;
        }
        .scroll-top{
            background-color: #06933e !important;
        }
        .main-btn-2.btn-secondcolor {
            background-color: #06933e !important;
        }
        .main-btn-2.btn-secondcolor i {
            color: #06933e !important;
        }
        .record-item-text p{
            color: #06933e !important;
        }
        .section-title.section-title-secondcolor h2 span{
            color: #06933e !important;
        }
        .section-title h2 span{
            color: #06933e !important;
        }
        .help-card-thumb{
            background-color: #06933e !important;
        }
        .help-card-thumb i{
            color: #FFF !important;
        }
        .about-card-icon i:last-child,
        .about-card-icon i:first-child,
        .section-title.section-title-secondcolor small,
        .course-location li,
        .course-flat-card .course-card-content .redirect-link,
        .header-revolution .header-title span,
        .main-nav nav .navbar-nav .nav-item a.active,
        .footer-copyright-text a{

            color: #06933e !important;
        }
        .tp-caption .header-title .tp-resizeme{
            margin-bottom: 10px !important;
        }
        .header-page-shape{
            right: 0% !important;
        }
        .header-page-shape-bottom{
            width: 49% !important;
        }
        .header-page{
            background-image: none !important;
        }
        .mean-container a.meanmenu-reveal span,
        .tp-bannertimer {
                    background-color: #007a2f !important;
        }
        .navbar-option-item .main-btn:hover{
            background-color: #0a0f18 !important;
        }

    /*start gallery*/
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        .title {
            margin-top: 50px;
        }
        .title h1 {
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: Arial;
            text-transform: uppercase;
            color: #d63031;
        }
        .title h1 span {
            display: block;
            color: #300a0a;
            font-size: 20px;
            margin-bottom: 10px;
        }

        /*Carousel Gallery*/
        .carousel-gallery {
            margin: 50px 0;
            padding: 0 30px;
        }
        .carousel-gallery .swiper-slide a {
            display: block;
            width: 100%;
            height: 200px;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            -webkit-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
        }
        .carousel-gallery .swiper-slide a:hover .image .overlay {
            opacity: 1;
        }
        .carousel-gallery .swiper-slide a .image {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
        }
        .carousel-gallery .swiper-slide a .image .overlay {
            width: 100%;
            height: 100%;
            background-color: rgba(20, 20, 20, 0.8);
            text-align: center;
            opacity: 0;
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        .carousel-gallery .swiper-slide a .image .overlay em {
            color: #fff;
            font-size: 26px;
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            display: inline-block;
        }
        .carousel-gallery .swiper-pagination {
            position: relative;
            bottom: auto;
            text-align: center;
            margin-top: 25px;
        }
        .carousel-gallery .swiper-pagination .swiper-pagination-bullet {
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        .carousel-gallery .swiper-pagination .swiper-pagination-bullet:hover {
            opacity: 0.7;
        }
        .carousel-gallery .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background-color: #d63031;
            transform: scale(1.1, 1.1);
        }

        /*# Carousel Gallery*/
        .plugins {
            text-align: center;
        }
        .plugins h3 {
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: Arial;
            text-transform: uppercase;
            color: #111;
        }
        .plugins a {
            display: inline-block;
            font-family: Arial;
            color: #777;
            font-size: 14px;
            margin: 10px;
            transition: all 0.2s linear;
        }
        .plugins a:hover {
            color: #d63031;
        }
        @media only screen and (max-width: 991px){
            .mobile-nav .logo {
                position: fixed !important;
                top: 0;
                left: 12px !important;
                width: 96px !important;
            }
        }
        .arab{
            font-family: 'Cairo', sans-serif !important;
        }
        .carriere_content p,
        .carriere_content span,
        .carriere_content font{
            font-family: 'Cairo', sans-serif !important;
            line-height: 24px  !important;
        }
        .actualite_content p,
        .actualite_content span,
        .actualite_content font{
            font-family: 'Cairo', sans-serif !important;
            line-height: 24px  !important;
        }

        .connexios:after{
            background-color: #06933e !important;
        }
        .create_account:after{
            background-color: #aa8400 !important;
        }



        /*start videos*/
        .videio .card {
            width: 44vw;
            height: calc(9/16 * 30vw);
            max-width: calc(16/9 * 70vh);
            max-height: 70vh;
            display: flex;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1613479/inception.jpg") center center/cover;
            overflow: hidden;
        }

        .videio .card-play {
            width: 48px;
            height: 48px;
            position: relative;
            z-index: 1;
            margin: auto;
            opacity: 0;
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1613479/play.svg") center center/cover;
            cursor: pointer;
            transition: opacity 0.3s ease-out;
        }

        .videio .card-play:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            background: #000;
            transition: all 0.5s ease-out;
        }

        .videio .card-video {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 2;
            background: #000;
        }
        .videio .card-video iframe {
            width: 100%;
            height: 100%;
        }

        .videio .card:after {
            content: "";
            width: 250%;
            height: 250%;
            position: absolute;
            top: var(--y);
            left: var(--x);
            transform: translate(-50%, -50%);
            opacity: 0;
            background: radial-gradient(circle closest-side, rgba(255, 255, 255, 0.3), transparent);
            transition: opacity 0.5s ease-out;
        }

        /* ------------ STATES ------------ */
        .videio .card:hover:after,
        .videio .card:hover .card-play {
            opacity: 1;
        }

        .videio .video-is-open:after {
            display: none;
        }

        .video-is-open .card-play {
            opacity: 1;
        }
        .videio .video-is-open .card-play:after {
            width: 2vh;
            height: 2vh;
            transform: translate(-50%, -50%) scale(88.8888888889);
            transition: transform 0.5s ease-out;
        }

    </style>

</head>

<body>
<!-- preloader -->
<div class="preloader css-selector">
    <div class="preloader-wrapper">
        <div class="">
            <img class="scale-in-hor-center" src="{{ asset("images/logoSpin.png")}}" alt="logo" width="100" height="100">
        </div>
        <img src="{{ asset("images/logo_landing-removebg-preview.png")}}" alt="logo" width="100" height="100">
    </div>
</div>
<!-- .end preloader -->
<!-- navbar -->
@include('landing_page.layout.header')
<!-- .end navbar -->
<!-- header -->

<!-- .end header -->



@yield('content')
<!-- .end partner-section -->
<!-- become-section -->
<!-- .end become-section -->
<!-- footer -->
@include('landing_page.layout.footer')
<!-- .end footer -->

<!-- scroll-top -->
<div class="scroll-top" id="scrolltop">
    <div class="scroll-top-inner">
        <span><i class="flaticon-up-arrow"></i></span>
    </div>
</div>
<!-- .end scroll-top -->
<style>
    .scale-in-hor-center {
        -webkit-animation: scale-in-hor-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 2 both;
        animation: scale-in-hor-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 2 both;
    }
    /* ----------------------------------------------
 * Generated by Animista on 2022-5-5 20:32:57
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
     * ----------------------------------------
     * animation rotate-center
     * ----------------------------------------
     */
    /* ----------------------------------------------
 * Generated by Animista on 2022-5-5 20:46:12
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
     * ----------------------------------------
     * animation scale-in-hor-center
     * ----------------------------------------
     */
    @-webkit-keyframes scale-in-hor-center {
        0% {
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            opacity: 1;
        }
        100% {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            opacity: 1;
        }
    }
    @keyframes scale-in-hor-center {
        0% {
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            opacity: 1;
        }
        100% {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            opacity: 1;
        }
    }

    .css-selector {
        background: linear-gradient(270deg, #fcc425, #e63d2e, #1eafe2);
        background-size: 600% 600%;

        -webkit-animation: AnimationName 4s ease infinite;
        -moz-animation: AnimationName 4s ease infinite;
        animation: AnimationName 4s ease infinite;
    }

    @-webkit-keyframes AnimationName {
        0%{background-position:0% 50%}
        50%{background-position:100% 50%}
        100%{background-position:0% 50%}
    }
    @-moz-keyframes AnimationName {
        0%{background-position:0% 50%}
        50%{background-position:100% 50%}
        100%{background-position:0% 50%}
    }
    @keyframes AnimationName {
        0%{background-position:0% 50%}
        50%{background-position:100% 50%}
        100%{background-position:0% 50%}
    }

</style>
<!-- essential js -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- counter js -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- fullcalender js -->
<script src="{{ asset('assets/js/moment.js') }}"></script>
<script src="{{ asset('assets/js/main.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- revolution slider js -->
<script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
<!-- slider revolution extension scripts. only needed for local testing -->
<script src="{{ asset('assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- form ajazchimp js -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- form validator js  -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- contact form js -->
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<!-- meanmenu js -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/script.js') }}"></script>

<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!--gellery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
@yield('scripts')
</body>
</html>
