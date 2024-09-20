<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Health Center</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('site-asset/css/core-style.css')}} ">
    <link rel="stylesheet" href="{{asset('site-asset/style.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('site-asset/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('site-asset/css/component.css')}}" >

    <link rel="stylesheet" href="{{asset('site-asset/css/fa.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('../vendor/starability/css/starability-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/ratings.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medica-load"></div>
        <img src="{{asset('img/logos/glidesoft.png')}}">
    </div>

    <!--  Header Area Start  -->
    @include('site.layouts.header')
    <!--  Header Area End  -->

     <!--  Header Area Start  -->
     @yield('content')
    <!--  Header Area End  -->

    <!--  Footer Area Start  -->
    @include('site.layouts.footer')
    <!--  Footer Area End  -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('site-asset/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('site-asset/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('site-asset/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('site-asset/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('site-asset/js/active.js')}}"></script>
    <!-- register -->
    <script src="{{asset('site-asset/js/classie.js')}}"></script>
    <script src="{{asset('site-asset/js/input-active.js')}}"></script>

</body>

</html>
