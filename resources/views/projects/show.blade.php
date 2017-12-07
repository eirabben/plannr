@extends('layouts.app')

@section('content')
  <h1>{{ $project->name }}</h1>
  <form method="post" action="{{ route('projects.destroy', $project) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit">Delete</button>
  </form>
@endsection

