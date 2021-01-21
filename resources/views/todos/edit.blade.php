@extends('layouts.app')

@section('title')
Edit {{ $todo->name }}
@endsection

@section('content')
<h1 class="text-center my-5">Edit: {{ $todo->name }}</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
        <h3>Edit Todo</h3>
      </div>
      <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
          <div class="list-group">
            @foreach($errors->all() as $error)
              <li class="list-group-item">
                {{ $error }}
              </li>
            @endforeach
          </div>
        </div>
        @endif
        <form action="/todos/{{ $todo->id}}/update-todos" method="POST">
          @csrf
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="{{ $todo->name }}" placeholder="Name">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Description" name="description" rows="5" cols="5">{{ $todo->description }}</textarea>
          </div>
          <div class="form-group text-center">
            <button class="btn btn-success" type="submit">Update Todo</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
