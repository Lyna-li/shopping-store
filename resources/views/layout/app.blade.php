<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Shopping store</title>
        <meta name="description" content="Manup Template">
        <meta name="keywords" content="Manup, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('partiel.header')
        @yield('style')
    </head>
    
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        @include('partiel.nav_bar')
        @yield('content')
        @include('partiel.footer')
        @yield('scripts')
    </body>
</html>