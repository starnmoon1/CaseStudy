<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/comment.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/cart.css')}}">
</head>
<body>
@include('partials.header')
@include('partials.navbar')

<div class="section">
    <div class="container">
        <!-- row -->
        <div class="row">
            @include('partials.admin_slider')
            <h2>admin</h2>
            @yield('content')
        </div>
    </div>
</div>

@include('partials.footer')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/nouislider.min.js')}}"></script>
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>
</body>
</html>
