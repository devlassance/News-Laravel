<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - LATEST NEWS</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <br>
    <center>
         <a style="text-decoration: none" href="{{route('home')}}"><h1 style="color:black;">LATEST NEWS</h1></a>
    </center>
    <hr>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>