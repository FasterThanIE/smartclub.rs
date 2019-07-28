<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <script src="/javascript/jquery.min.js"></script>
        <script src="/javascript/bootstrap.min.js"></script>
        <script src="/javascript/script.js"></script>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>

    <body>

        @include("partials/navigation")

        @yield('content')

        <footer class="w-100 p-2 backgroundBlue text-center">

            <p class="colorWhite">2019 © Sva prava zadržana</p>

        </footer>

    </body>

</html>