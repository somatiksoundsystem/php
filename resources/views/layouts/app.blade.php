<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="Description" content="Somatik Sound System - On the 90 bpm evolution of another kind techno music.">
    <meta name="Keywords"
          content="music,somatik,sound,vibe,soma,Somatik Sounds, Somatik, 90 bpm, Somatik Techno, Perforated Cerebral Party, somatiksounds">
    <meta property="og:title" content="Somatik Sound System">
    <meta property="og:description"
          content="Somatik Sound System - On the 90 bpm evolution of another kind techno music.">
    <meta property="og:image" content="/img/logo_somatik.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">
    <meta property="og:image:alt" content="Somatik Sound System">

    <title>{{ config('app.name', 'Somatik Sound System') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/css/style.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/svg4everybody/2.1.9/svg4everybody.min.js"></script>
    <script>document.addEventListener("DOMContentLoaded", svg4everybody);</script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1EQHW1F4R1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1EQHW1F4R1');
    </script>
</head>
<body class="background">
<header class="header">
    <div class="header__container">
        <div class="header__logo"><a href="/"><img class="header__img" src="/img/logo_somatik.jpg" alt="Somatik Logo"
                                                   width="80" height="80"/></a><img class="header__img"
                                                                                    src="/img/logo_omwifi_animated.gif"
                                                                                    alt="OmWiFi" width="80"
                                                                                    height="80"/></div>
        <nav class="navigation">
            <ul class="navigation__list navigation__list--nojs">
                <li class="navigation__item"><a class="navigation__link" href="/">Albums</a></li>
                <li class="navigation__item"><a class="navigation__link" href="/artists">Artists</a></li>
                <li class="navigation__item"><a class="navigation__link" href="/news">News</a></li>
                <li class="navigation__item"><a class="navigation__link" href="/page-in-progress">Shop</a></li>
                <li class="navigation__item"><a class="navigation__link" href="/page-in-progress">Contacts</a></li>
            </ul>
            <button class="navigation__button navigation__button--nojs">
                <span class="navigation__burger">Navigation button</span>
            </button>
        </nav>
    </div>
</header>
<main class="main">
    <div class="main__container">@yield('content')</div>
</main>
<script src="/scripts/navigation.js"></script>
</body>
</html>

