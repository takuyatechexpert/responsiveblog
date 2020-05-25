<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <header class="admin__header">
        <ul class="admin__header__list">
          <li class="admin__header__list--title">
          Dash Board
          </li>
          <li class="admin__header__list--user">
            user name
          </li>
        </ul>
      </header>
      
      <nav class="admin__nav">
        <ul>
          <li>
            <a href="{{ route('admin.home')}}">New Post</a>
          </li>
          <li>
            <a href="{{ route('news.create')}}">News Post</a>
          </li>
          <li>
            <a href="#">Posts List</a>
          </li>
          <li>
            <a href="#">News List</a>
          </li>
        </ul>
      </nav>
    @yield('content')

</body>
</html>
