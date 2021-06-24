<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"/>
    <meta name="X-CSRF-Token" content="{{ csrf_token() }}"/>
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <style>
        body:after {
            content: "";
            background-image: url("{{ asset("img/background.jpeg") }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: white;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
            opacity: 0.8;
        }
    </style>
</head>

<body>
<h1 class="title">{{ config('app.name', 'Laravel') }}</h1>
@yield('content')
</body>

</html>
