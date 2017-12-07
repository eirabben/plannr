@extends('layouts.app')

@section('content')
  <h1>{{ $client->name }}</h1>
  <form method="post" action="{{ route('clients.destroy', $client) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit">Delete</button>
  </form>

  <h2>Projects</h2>
  <ul>
    @foreach($projects as $project)
      <li>{{ $project->name }}</li>
    @endforeach
  </ul>
@endsection

