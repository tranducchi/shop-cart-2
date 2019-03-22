<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
    <!-- Navbar -->
    @include('./layouts/front-end/navbar')
    <!-- End navbar -->
    <!-- Slide -->
    @yield('slide')
    <!-- End slide -->
    <!-- Main Content -->
    @yield('content')
    <!-- End Main Content -->

    <!-- Contact -->
    @include('./layouts/front-end/contact')
    <!-- End Contact -->
    @include('./layouts/front-end/footer')
    <!-- Tag Script -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- End tag script -->
    </body>
</html>
