@extends('layouts.guest')

@section('content')
  <form method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}

      <div>
        <label for="email">E-Mail Address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
          <strong>{{ $errors->first('email') }}</strong>
        @endif
      </div>

      <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>

        @if ($errors->has('password'))
          <strong>{{ $errors->first('password') }}</strong>
        @endif
      </div>

      <div>
        <label>
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
      </div>

      <div>
        <button type="submit">Login</button>
        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
      </div>
  </form>
@endsection
