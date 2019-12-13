<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        <link rel="apple-touch-icon" href="<?= url("resources/template/app-assets/images/ico/apple-icon-120.png") ?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?= url("resources/template/app-assets/images/ico/favicon.ico") ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/vendors/css/vendors.min.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/vendors/css/forms/icheck/icheck.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/vendors/css/forms/icheck/custom.css") ?>">
        <!-- END: Vendor CSS-->
    
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/css/bootstrap.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/css/bootstrap-extended.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/css/colors.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/css/components.css") ?>">
        <!-- END: Theme CSS-->
    
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/css/core/menu/menu-types/vertical-menu-modern.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/css/core/colors/palette-gradient.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/app-assets/css/pages/login-register.css") ?>">
        <!-- END: Page CSS-->
    
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="<?= url("resources/template/assets/css/style.css") ?>">
        <!-- END: Custom CSS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Inicio') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
