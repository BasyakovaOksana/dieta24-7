<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ csrf_token() }}">
    <meta name="description" content="{{ csrf_token() }}">

    <meta name="meta_description" content="@yield('meta_description')">

    <title> @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="{{asset('dns-prefetch" href="//fonts.gstatic.com')}}">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Yeseva+One&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet')}}">
    <link rel="stylesheet"
          href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/css/uikit.min.css')}}"/>
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') }}"></script>
    <script src="{{ asset('http://code.jquery.com/jquery-1.11.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{asset('../styles/style.css')}}">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(52653388, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/52653388" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
<div id="app">

    @include('header')

    <main class="py-4">
        @yield('content')
    </main>

    @include('footer')

</div>
</body>
</html>
