<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/libs/slick/slick.css">
    <link rel="stylesheet" href="/assets/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link href="/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>@yield('title')</title>
</head>
<body>
@yield('content')
<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/js/mask.js"></script>
<script src="/assets/libs/slick/slick.min.js"></script>
<script src="/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="/assets/js/main.js"></script>
@stack('scripts')
</body>
</html>