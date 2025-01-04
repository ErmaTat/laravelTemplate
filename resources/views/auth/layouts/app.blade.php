<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="">
    <meta name="keywords"
        content="">
    <meta name="author" content="">

    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description"
        content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="">
    <title>App-@yield('title','')</title>

    {{-- <link rel="shortcut icon" href="assets/img/favicon.png"> --}}

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">
    <script src="{{ asset('backend/assets/js/layout.js')}}"></script>
    @yield('css')
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2 logo-color" src="assets/img/logo2.png" alt="Logo">
                <img class="img-fluid logo-light mb-2" src="assets/img/logo2-white.png" alt="Logo">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/js/jquery-3.7.1.min.js')}}" ></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}" ></script>

    <script src="{{ asset('backend/assets/js/theme-settings.js')}}" ></script>
    <script src="{{ asset('backend/assets/js/greedynav.js')}}" ></script>

    <script src="{{ asset('backend/assets/js/script.js')}}" ></script>
    <script src="{{ asset('backend/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}"
        data-cf-settings="1037ac20bba9f67625494dde-|49" defer=""></script>
    @yield('scripts')
</body>

</html>
