@extends('layouts.app')

@section('title')
Create Todo
@endsection

@section('content')
<h1 class="text-center my-5">Create New Todo</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
        <h3>Create New Todo</h3>
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
        <form action="/store-todos" method="POST">
          @csrf
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Description" name="description" rows="5" cols="5"></textarea>
          </div>
          <div class="form-group text-center">
            <button class="btn btn-success" type="submit">Create Todo</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
