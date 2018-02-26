<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $name }}</title>
    <link rel="icon" type="image/png" href="/assets/favs/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/assets/favs/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/favs/favicon-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="/assets/favs/favicon-64x64.png" sizes="64x64">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favs/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favs/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favs/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favs/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favs/apple-touch-icon-152x152.png">
    <link rel="stylesheet" href="/minified/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assembled/css/common.css">
</head>
<body>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <script src="/assembled/js/common.js"></script>
</body>
</html>