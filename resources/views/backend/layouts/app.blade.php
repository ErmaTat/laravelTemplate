<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    {{-- <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content=""> --}}
    <title>App-@yield('title', '')</title>

    {{-- <link rel="shortcut icon" href="assets/img/favicon.png"> --}}

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('backend/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/icons/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables/datatables.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  
    <script src="{{ asset('backend/assets/js/layout.js')}}" ></script>
   <style>
    .border-input {
        border: solid 1px;
        border-radius:10px; 
        border-color: rgb(165, 165, 165);
        padding: 8px 15px;
    }
   </style>
   <style>
    @font-face {
        font-family: poppins;
        src: url('/backend/assets/fonts/Poppins/Poppins-Regular.ttf');
    }

    @font-face {
        font-family: sour_gummy;
        src: url('/backend/assets/fonts/Sour_Gummy/static/SourGummy_Expanded-Regular.ttf');
    }

    @font-face {
        font-family: fredoka;
        src: url('/backend/assets/fonts/fredoka/static/Fredoka-Regular.ttf');
    }

    body {
        font-family: "fredoka", sans-serif;
    }
</style>
    @yield('css')
</head>
@vite('resources/js/app.js') 
<body>
    <div class="main-wrapper">
        @include('backend.layouts.partials.header')

        @include('backend.layouts.partials.sidebar')

        <div class="page-wrapper {{ Route::currentRouteName() === 'notifications.index' ? 'notifications' : '' }}">
            <div class="content container-fluid pb-0">
                <div class="page-header">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>{{ session('success') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @elseif (session()->has('status'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                       <strong>{{ session('status') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @elseif (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session('error') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @elseif (session()->has('warning'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('warning') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @elseif ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           <strong>{{ $error }}</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
                    <div class="content-page-header">
                        <h5>@yield('page-title')</h5>
                       
                        <div class="list-btn">
                            @yield('list-btn')
                        </div>
                        @yield('not-btns')
                    </div>

                    @yield('other')
                </div>

                @yield('content')
            </div>
        </div>

    </div>

    <script src="{{ asset('backend/assets/js/jquery-3.7.1.min.js')}}" ></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{ asset('backend/assets/plugins/datatables/datatables.min.js')}}"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js')}}" ></script>

    <script src="{{ asset('backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}" ></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>

    <script src="{{ asset('backend/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script src="{{ asset('backend/assets/js/jquery-ui.min.js')}}"></script>

    <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js')}}" ></script>
    <script src="{{ asset('backend/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>

    <script src="{{ asset('backend/assets/js/theme-settings.js')}}" ></script>
    <script src="{{ asset('backend/assets/js/greedynav.js')}}" ></script>

    <script src="{{ asset('backend/assets/js/script.js')}}" ></script>
    {{-- <script src="{{ asset('backend/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="ca4eff649efecd920a383c08-|49" defer=""></script> --}}
    <script>
        $(document).ready(function() {
         var currentUrl = window.location.href;
 
         $('li a').each(function() {
             var link = $(this).attr('href');
            
             if (currentUrl.includes(link) && link !== '#') {
                 $(this).addClass('active');
                 if ($(this).closest('ul').parent().hasClass('submenu')) {
                     $(this).closest('ul').slideDown(); 
                     $(this).closest('ul').parent().find('a').first().addClass('active subdrop');
                 }
             }
         });
     });
 
     </script>
    @yield('scripts')

</html>
