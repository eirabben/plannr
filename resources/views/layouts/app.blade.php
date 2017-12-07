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

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    {{-- <link rel="stylesheet "href="{{ asset('css/main.css') }}"> --}}
  </head>
  <body>
    <a class="navbar-brand" href="{{ url('/home') }}">
      {{ config('app.name', 'Laravel') }}
    </a>

    <p>{{ Auth::user()->name }}</p>

    <form action="{{ route('logout') }}" method="POST">
      {{ csrf_field() }}
      <button type="submit">Logout</button>
    </form>

    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('clients.index') }}">Clients</a></li>
      <li><a href="{{ route('projects.index') }}">Projects</a></li>
      <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
    </ul>

    @yield('content')

    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
  </body>
</html>
