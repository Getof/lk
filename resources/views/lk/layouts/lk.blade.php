<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Главная</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/lk.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    @yield('css')
    <script type="text/javascript" src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>

</head>
<body>
@yield('aside')

@include('lk.custom.nav-head')

@yield('main')

@include('lk.custom.nav-bottom')

<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js') }}"></script>



@yield('script')
</body>
</html>
