<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
	<meta name="author" content="PIXINVENT">
	<title>SiperSotf | @yield('title')</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/vendors/css/vendors.min.css")?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/css/bootstrap.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/css/bootstrap-extended.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/css/colors.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/css/components.css")?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/css/core/menu/menu-types/vertical-menu-modern.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/css/core/colors/palette-gradient.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/vendors/css/charts/morris.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/fonts/simple-line-icons/style.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/app-assets/css/core/colors/palette-gradient.css")?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url("resources/template/assets/css/style.css")?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('')}}"><img class="brand-logo" alt="modern admin logo" src="<?= url("resources/template/app-assets/images/logo/logo.png") ?>">
                            <h3 class="brand-text">Siper Soft</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li> -->
                        @include('layouts.header.navbar.addUsed')
						<!-- search -->
						@include('layouts.header.navbar.search')
						<!-- search -->
                    </ul>
                    <ul class="nav navbar-nav float-right">
						<!-- sede -->
						@include('layouts.header.navbar.office')
						<!-- sede -->

						<!-- Notification -->
						@include('layouts.header.navbar.notification')
						<!-- Notification -->

						<!-- message -->
						@include('layouts.header.navbar.message')
						<!-- message -->

						<!-- message -->
						@include('layouts.header.navbar.profile')
						<!-- message -->
                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <!-- menu -->
	@include('layouts.header.menu')
	<!-- menu -->

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
	   @yield('content')
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://cristianyepes.com" target="_blank">Harold Nieto y Cristian Yepes</a></span><span class="float-md-right d-none d-lg-block">Hecho a mano y hecho con <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= url("resources/template/app-assets/vendors/js/vendors.min.js") ?>" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= url("resources/template/app-assets/vendors/js/charts/chart.min.js") ?>" type="text/javascript"></script>
    <script src="<?= url("resources/template/app-assets/vendors/js/charts/raphael-min.js") ?>" type="text/javascript"></script>
    <script src="<?= url("resources/template/app-assets/vendors/js/charts/morris.min.js") ?>" type="text/javascript"></script>
    <script src="<?= url("resources/template/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js") ?>" type="text/javascript"></script>
    <script src="<?= url("resources/template/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js") ?>" type="text/javascript"></script>
    <script src="<?= url("resources/template/app-assets/data/jvector/visitor-data.js") ?>" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= url("resources/template/app-assets/js/core/app-menu.js") ?>" type="text/javascript"></script>
    <script src="<?= url("resources/template/app-assets/js/core/app.js") ?>" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= url("resources/template/app-assets/js/scripts/pages/dashboard-sales.js") ?>" type="text/javascript"></script>
	<!-- END: Page JS-->
	
	@if(View::hasSection('viewjs'))
        <script src="<?= url('/') ?>/resources/assets/js/@yield('viewjs').js?v=<?=$v?>"></script>
    @endif

</body>
<!-- END: Body-->

</html>