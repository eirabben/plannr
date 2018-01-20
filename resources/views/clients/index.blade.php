@extends('layouts.app')

@section('content')
  <div class="p-4">
    <div class="flex items-center mb-8">
      <h1 class="mr-4">Clients</h1>
      <a class="button text-sm" href="{{ route('clients.create') }}">New client</a>
    </div>

    <div>
      @foreach($clients as $client)
        <div class="p">
          <a class="text-black no-underline" href="{{ route('clients.show', $client) }}">{{ $client->name }}</a>
        </div>
      @endforeach
    </div>
  </div>
@endsection

