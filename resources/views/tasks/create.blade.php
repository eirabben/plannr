@extends('layouts.app')

@section('content')
  <form method="post" action="{{ route('tasks.store') }}">
    {{ csrf_field() }}

    <div>
      <label for="name">Name</label>
      <input type="text" name="name">
    </div>

    <div>
      <label for="scheduled-for">Name</label>
      <input type="date" name="scheduled_for">
    </div>

    <div>
      <label for="project">Project</label>
      <select name="project_id">
        <option value=""></option>
        @foreach($projects as $project)
          <option value="{{ $project->id }}">{{ $project->name }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit">Save</button>
  </form>
@endsection


