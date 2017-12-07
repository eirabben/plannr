@extends('layouts.app')

@section('content')
  <form method="post" action="{{ route('clients.store') }}">
    {{ csrf_field() }}

    <label for="name">Name</label>
    <input type="text" name="name">

    <button type="submit">Save</button>
  </form>
@endsection


