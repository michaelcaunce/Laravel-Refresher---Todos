@extends('layouts.app')

@section('title')
Todos list
@endsection

@section('content')
<h1 class="text-center my-5">What Do You Have Todo?</h1>
<div class="row justify-content-center">
  <!-- Section for incomplete Todos -->
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
        <h3>Todos</h3>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <!-- Loop through all Todos -->
          @foreach($todos as $todo)
            <!-- Show Todos only If a Todo is  incomplete -->
            @if(!$todo->completed)
              <!-- Display a list of Todos -->
              <li class="list-group-item">
                {{ $todo->name }}
                <a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning btn-sm float-right">Complete</a>
                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>

  <!-- Section to display completed Todos -->
  <div class="col-md-8 my-5">
    <div class="card card-default">
      <div class="card-header">
        <h3>Completed Todos</h3>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <!-- Loop through all Todos -->
          @foreach($todos as $todo)
            <!-- Only display the content If a Todo is completed -->
            @if($todo->completed)
              <!-- Display a list of completed Todos -->
              <li class="list-group-item">
                {{ $todo->name }}
                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
