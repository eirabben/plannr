@extends('layouts.app')

@section('content')
  <h1>Tasks</h1>

  <a href="{{ route('tasks.create') }}">Add new</a>

  <ul>
    @foreach($tasks as $task)
      <li><a href="{{ route('tasks.show', $task) }}">{{ $task->name }}</a></li>
    @endforeach
  </ul>
@endsection

