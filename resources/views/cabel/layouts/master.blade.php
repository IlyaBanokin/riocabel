<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Интернет-магазин кабельной промышленности">
    <meta name="keywords" content="Интернет-магазин кабельной продукции">
    <title>Кабельная компания Кабельный Трейдер ООО</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="text/css" rel="stylesheet" href="/inc/style.css">
    <link type="text/css" rel="stylesheet" href="/inc/decor.css">
    <link type="text/css" rel="stylesheet" href="/inc/user.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <link href="/inc/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/inc/normalize.css" type="text/css">
    <link rel="stylesheet" href="/inc/skeleton.css" type="text/css">
    <link rel="stylesheet" href="/inc/skeleton.custom.css" type="text/css">
    <link rel="stylesheet" href="/inc/icons.css" type="text/css">
    <link rel="stylesheet" href="/inc/slick.css" type="text/css">
    <link rel="stylesheet" href="/inc/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="/inc/main.css" type="text/css">
    <link rel="stylesheet" href="/inc/my.css" type="text/css">
    <script src="//api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <script src="/inc/js/geo.js" type="text/javascript"></script>
</head>
<body>
<header class="site-header">
    @yield('header')
    @yield('navigation')
</header>
<section class="site-content">
    <div class="container">
        @include(env('THEME') . '.shop.main.includes.result_messages')
    </div>
    @yield('content')
    @yield('slider')
    @yield('hit')
    @yield('categories')
    @yield('scheme_of_work')
    @yield('trust')
    @yield('feedback')
    @yield('partners')
</section>
@yield('footer')
@include(env('THEME') . '.shop.mail.callBack')
<script id="facebook-jssdk" src="/inc/all.js"></script>
<script type="text/javascript" charset="utf-8" src="/inc/jquery.js"></script>
<script type="text/javascript" charset="utf-8" src="/inc/jquery.jgrowl_minimized.js"></script>
<script type="text/javascript" charset="utf-8" src="/inc/jquery.cookie.js"></script>
<script type="text/javascript" charset="utf-8" src="/inc/guest.js"></script>
<script src="/inc/js/slick.min.js"></script>
<script src="/inc/js/main.js"></script>
<script src="/inc/js/base-template.js"></script>
<script src="/js/menu.js"></script>
<script src="/js/typeahead.bundle.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
