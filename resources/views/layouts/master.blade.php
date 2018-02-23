<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $name }}</title>
    <link rel="stylesheet" href="/minified/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assembled/css/common.css">
</head>
<body>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <script src="/assembled/js/common.js"></script>
</body>
</html>