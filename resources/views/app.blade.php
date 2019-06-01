<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sc|ale=1">

    <title>Menú</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/camera.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl-carousel.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>
</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>