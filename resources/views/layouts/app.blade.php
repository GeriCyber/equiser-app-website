<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>@yield('page-title', config('app.name') )</title>-->

    {!! SEOMeta::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
    {!! Twitter::generate(true) !!}
    
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('extra-pages')}}\landingpage\assets\logos\favicon.ico" type="image/png" sizes="16x16">
    <!-- Bootstrap -->
    <link href="{{asset('extra-pages')}}\landingpage\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\owl.carousel.css">
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\owl.theme.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\magnific-popup.css">
    <!-- Full Page Animation -->
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\animsition.min.css">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}\icon\font-awesome\css\font-awesome.min.css">
    <!-- Main Style css -->
    <link href="{{asset('extra-pages')}}\landingpage\assets\css\style.css" rel="stylesheet" type="text/css" media="all">
    <!-- hover-effect.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}\pages\hover-effect\normalize.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}\pages\hover-effect\set2.css">
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\datatables.min.css">

    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('extra-pages')}}\landingpage\assets\css\jquery.fancybox-buttons.css" type="text/css" media="screen" />

    {{-- SEO --}}
    <meta name="description" content="Equiser Gruas">
    <meta name="keywords" content="Gruas, Venezuela">

</head>
<body>

    <div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="500" data-animsition-out-class="fade-out" data-animsition-out-duration="500">

        @if(Route::currentRouteName() != 'index')
            @if(isset($exception) && $exception->getStatusCode() == 404) 
                @yield('content')
            @else 
                @include('layouts.navbar.guest')
                @yield('content')
                @include('layouts.footer.guest')
            @endif
        @else
            @yield('content')
        @endif
    </div>
    <!-- Wrapper-->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\jquery-2.1.1.js"></script>
    <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\plugins.js"></script>
    <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\menu.js"></script>
    <script type="text/javascript" src="{{asset('extra-pages')}}\landingpage\assets\js\custom.js"></script>

    @stack('datatable')
    @stack('fancybox')
    @stack('sendEmail')
    
    </body>
</html>