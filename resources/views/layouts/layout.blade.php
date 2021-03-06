<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=800">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title -->
    <title>@yield('title')</title>

    <!-- icon -->
    @if(app('env')=='local')
        <link rel="icon" href="{{ asset('/images/favicon.ico') }}">
    @endif
    @if(app('env')=='production')
        <link rel="icon" href="{{ secure_asset('/images/favicon.ico') }}">
    @endif
    
    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    
    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @stack('css')
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <br>
    
    <div class="container">
        @yield('content')
    </div> 

    <footer class="footer bg-dark  fixed-bottom">
        @include('layouts.footer')
    </footer>
</body>
</html>