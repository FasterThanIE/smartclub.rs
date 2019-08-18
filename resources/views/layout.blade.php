<!DOCTYPE html>

<html>
    <head>

        <meta name="google-site-verification" content="jp1tOjgQiV2-EtGGcfvq0roIIQJylf-w57FLrB3kSDM" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145851598-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-145851598-1');
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <script src="/javascript/jquery.min.js"></script>
        <script src="/javascript/bootstrap.min.js"></script>
        <script src="/javascript/script.js"></script>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        @yield('title', '<title>SmartClub.rs</title>')


    </head>

    <body>

        @include("partials/navigation")

        @yield('content')

        <footer class="w-100 p-2 backgroundBlue text-center">

            <p class="colorWhite">2019 © Sva prava zadržana</p>

        </footer>

    </body>

</html>