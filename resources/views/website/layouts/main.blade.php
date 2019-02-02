<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="این وبسایت محلی برای به اشتراک گذاری کار های هنرمندان است">
    <meta name="keywords" content="تصویر، هنر.">
    <meta name="author" content="Omid Shabani">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="/images/fav-icon.png">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap-rtl/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="/vendor/swiper-master/css/swiper.min.css">
    <link rel="stylesheet" href="/vendor/featherlight/featherlight.css">
    <link rel="stylesheet" href="/vendor/featherlight/featherlight.gallery.css">
    <link rel="stylesheet" href="/vendor/font-awesome-5.0.6/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/stylesheet2.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/responsive2.css">
    <link rel="stylesheet" href="/css/icons.css">
    <script src="/vendor/jQuery/jquery-3.3.1.min.js"></script>
    <script src="/vendor/featherlight/jquery.detect_swipe.js"></script>


</head>
<body>
    @include('website.layouts.header')
        @yield('content')

    @include('website.layouts.footer')

<script src="/vendor/swiper-master/js/swiper.min.js"></script>
<script src="/vendor/featherlight/featherlight.js"></script>
<script src="/vendor/featherlight/featherlight.gallery.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/click-scripts.js"></script>

@yield('script')
</body>
</html>