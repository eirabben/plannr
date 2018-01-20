@extends('layouts.app')

@section('content')
  <div class="board p-4">
    @foreach($tasksByDate as $date => $tasks)
      <div class="rounded border bg-grey-light">
        <div class="p-4">
          <p class="font-bold text-sm tracking-wide">{{ $date }}</p>
        </div>
        <div class="">
          @foreach($tasks as $task)
            <div class="card bg-white border-t p-4">{{ $task->name }}</div>
          @endforeach
        </div>
        {{-- <div class="rounded-b px-4 pt-4 pb-3"> --}}
        {{--   <p class="text-sm text-grey-dark">Add task</p> --}}
        {{-- </div> --}}
      </div>
    @endforeach
  </div>
@endsection
