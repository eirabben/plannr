@extends('layouts.app')

@section('content')
  <h1>{{ $task->name }}</h1>

  <form method="post" action="{{ route('tasks.destroy', $task) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit">Delete</button>
  </form>
@endsection

