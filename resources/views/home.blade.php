@extends('layouts.app')

@section('content')
  <h1>Home</h1>

  <h2>Tasks</h2>
  <ul>
    @foreach($tasks as $task)
      <li>{{ $task->name }}</li>
    @endforeach
  </ul>
@endsection
