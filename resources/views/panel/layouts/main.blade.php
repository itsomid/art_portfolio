<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="/css/panel/bootstrap.min.css" rel="stylesheet">
    <link href="/css/panel/bootstrap-rtl/bootstrap-rtl.css" rel="stylesheet">
    <link href="/css/panel/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="/css/panel/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="/css/panel/animate.css" rel="stylesheet">
    <link href="/css/panel/style.css" rel="stylesheet">
    <link href="/css/panel/panel.css" rel="stylesheet">
    <link href="/css/panel/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="/css/panel/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="/css/panel/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="/css/panel/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="/css/panel/plugins/codemirror/codemirror.css" rel="stylesheet">

    <link href="/css/panel/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet">

    <link href="/css/panel/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="/css/panel/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="/css/panel/plugins/iCheck/custom.css" rel="stylesheet">

</head>

<body class="rtls">

<div id="wrapper">


    @include('panel.layouts.sidenav')
    <div id="page-wrapper" class="gray-bg" style="min-height: 925px;">
        @include('panel.layouts.header')
        <div class="wrapper wrapper-content">
            @yield('content')
        </div>
        @include('panel.layouts.footer')
    </div>
</div>
<script src="/js/panel/jquery-3.1.1.min.js"></script>
<script src="/js/panel/bootstrap.min.js"></script>
<script src="/js/panel/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/panel/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/panel/inspinia.js"></script>
<script src="/js/panel/plugins/pace/pace.min.js"></script>

<!-- blueimp gallery -->
<script src="/js/panel/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

<!-- iCheck -->
<script src="/js/panel/plugins/iCheck/icheck.min.js"></script>
@yield('script')

</body>

</html>