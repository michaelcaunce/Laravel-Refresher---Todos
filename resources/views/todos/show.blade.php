@extends('layouts.app')

@section('title')
{{ $todo-> name }}
@endsection

@section('content')
<h1 class="text-center my-5">{{ $todo->name }}</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default mb-5">
      <div class="card-header">
        <h3>Details</h3>
      </div>
      <div class="card-body">
        {{ $todo->description }}
      </div>
    </div>
    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-small my-2">Edit</a>
    <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-small my-2">Delete</a>
  </div>
</div>
@endsection
