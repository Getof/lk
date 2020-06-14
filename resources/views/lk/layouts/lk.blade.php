<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Главная</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/lk.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css">

    @yield('css')
    <script type="text/javascript" src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production

    </script>

</head>
<body>
@include('lk.custom.aside-t')

@include('lk.custom.nav-head')

@yield('main')

@include('lk.custom.nav-bottom')

<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js') }}"></script>

@yield('script')
</body>
</html>
