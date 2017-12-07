@extends('layouts.app')

@section('content')
  <form method="post" action="{{ route('tasks.store') }}">
    {{ csrf_field() }}

    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="project">Project</label>
    <select name="project_id">
      <option value=""></option>
      @foreach($projects as $project)
        <option value="{{ $project->id }}">{{ $project->name }}</option>
      @endforeach
    </select>

    <button type="submit">Save</button>
  </form>
@endsection


