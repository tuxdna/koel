<!DOCTYPE html>
<html>
<head>
    <title>Koel</title>

    <meta name="description" content="{{ config('app.tagline') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="manifest" href="{{ App::staticUrl('manifest.json') }}" />
    <link rel="icon" type="image/x-icon" href="{{ App::staticUrl('public/img/favicon.ico') }}" />
    <link rel="icon" href="{{ App::staticUrl('public/img/icon.png') }}">
    <link rel="apple-touch-icon" href="{{ App::staticUrl('public/img/icon.png') }}">

    <link rel="stylesheet" href="{{ App::rev('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ App::rev('css/app.css') }}">
</head>
<body>
    <app></app>

    <script src="{{ App::rev('js/vendors.js') }}"></script>
    <script src="{{ App::rev('js/main.js') }}"></script>
</body>
</html>
