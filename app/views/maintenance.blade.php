<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">


    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="./favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="./favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="./favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="./favicon/manifest.json">
    <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="{{Setting::get('site-title')}}">
    <meta name="application-name" content="{{Setting::get('site-title')}}">
    <meta name="msapplication-TileColor" content="#009fe3">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>{{Setting::get('site-title')}} @if(!empty($title)) {{'- '.$title }} @endif</title>

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.css') }}
    {{ HTML::style('css/maintenance.css') }}

</head>
<body class="maintaince">

<div class="center-container">
    <div class="logo-hospice animated fadeInDown delay-1">{{Setting::get('site-title')}}</div>
    <p class="maintaince-text animated fadeInUp delay-2">
        A weboldal karbantartás alatt áll. <br>Kérjük látogasson vissza később!
    </p>
    <span class="border-1"></span>
    <span class="border-2"></span>
    <span class="border-3"></span>
    <span class="border-4"></span>
</div>

</body>
</html>