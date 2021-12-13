<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Agawe">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ secure_asset('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ secure_asset('/assets/vendor/nucleo/css/nucleo.css ')}}" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ secure_asset('/assets/css/argon.css?v=1.2.0')}}" type="text/css">


</head>

<body>
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ secure_asset('assets/img/brand/blue.png')}}" class="navbar-brand-img">
                </a>
            </div>
            @if(Auth::check() && Auth::user()->is_user == 1)
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.spj')}}">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text">Surat Perjanjian Pencairan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.bantuan')}}">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Bantuan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @elseif (Auth::check() && Auth::user()->is_user == 1 && Auth::user()->is_admin == 1 && Auth::user()->is_admin_zona == 1 && Auth::user()->is_super_admin == 1)
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.html">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </nav>
    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{ secure_asset('assets/img/theme/team-4.jpg')}}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"> {{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-menu  dropdown-menu-right ">

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    <span> {{ __('Logout') }}</span>

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">{{ $title ?? '' }}</h6>
                        </div>
                    </div>
                    <!-- Card stats -->
                    @if(Auth::check() && Auth::user()->is_user == 1)
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="card-title text-uppercase mt-4 ml-1">Pra RKA</h2>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <a href="{{route('user.pra-rka')}}">
                                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                    <i class="ni ni-active-40"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="card-title text-uppercase mt-4 ml-1">RKA</h2>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <a href="{{route('user.rka')}}">
                                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                    <i class="ni ni-chart-pie-35"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="card-title text-uppercase mt-4 ml-1">BKU</h2>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <a href="{{route('user.bku')}}">
                                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                    <i class="ni ni-money-coins"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="card-title text-uppercase mt-4 ml-1">SPJ</h2>
                                        </div>
                                        <div class="col-auto mt-3">
                                            <a href="{{route('user.spj')}}">
                                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                    <i class="ni ni-chart-bar-32"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container-fluid mt--6">
            @yield('content')
        </div>
    </div>
    <script src="{{ secure_asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ secure_asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ secure_asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{ secure_asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>

</html>
