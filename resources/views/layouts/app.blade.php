<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://use.typekit.net/dwk4eee.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    {{-- <link rel="stylesheet "href="{{ asset('css/main.css') }}"> --}}
  </head>
  <body class="bg-grey-lighter font-sans">
    <div class="l-app">
      <header class="l-header bg-white flex justify-end">
        <div class="flex items-center">
          <img class="rounded-full h-8 w-8 mr-3" src="https://placehold.it/40x40" alt="">
          <p class="py-6 mr-8 text-grey">{{ Auth::user()->name }}</p>

          <form class="" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            <button class="px-8 py-6 bg-purple-lightest" type="submit">Sign out</button>
          </form>
        </div>
      </header>

      <aside class="l-sidebar bg-purple-darkest">
        <a class="block px-8 py-6 bg-purple-dark text-white no-underline tracking-wide" href="{{ url('/home') }}">
          {{ config('app.name', 'Laravel') }}
        </a>

        <nav class="nav">
          <span class="nav-label">Navigation</span>
          <a class="nav-item" href="{{ route('home') }}">Home</a>
          <a class="nav-item" href="{{ route('clients.index') }}">Clients</a>
          <a class="nav-item" href="{{ route('projects.index') }}">Projects</a>
          <a class="nav-item" href="{{ route('tasks.index') }}">Tasks</a>
        </nav>
      </aside>

      <main class="l-main">
        @yield('content')
      </main>
      </div>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
