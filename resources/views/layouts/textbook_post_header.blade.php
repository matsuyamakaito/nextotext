<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NextoText') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/post.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/">
          {{ config('app.name', 'NextoText') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">????????????</a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">??????</a>
                </li>
              @endif
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('textbook.index') }}">???????????????</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('textbook.favorites') }}">?????????????????????</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mylist.index') }}">???????????????</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('message.index') }}">????????????</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile/{{ Auth::user()->id }}">??????????????????</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    ???????????????
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                </form>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-success" href="{{ route('textbook.post') }}">??????</a>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>
</html>