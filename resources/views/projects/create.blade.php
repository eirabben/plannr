@extends('layouts.app')

@section('content')
  <form method="post" action="{{ route('projects.store') }}">
    {{ csrf_field() }}

    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="client">Client</label>
    <select name="client_id">
      <option value=""></option>
      @foreach($clients as $client)
        <option value="{{ $client->id }}">{{ $client->name }}</option>
      @endforeach
    </select>

    <button type="submit">Save</button>
  </form>
@endsection


