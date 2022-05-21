@extends('layouts.admin')

@section('title', 'Create Role')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create User</h4>
        <p class="card-description">
          Basic form elements
        </p>
        <form class="forms-sample" method="POST" action="{{ route('roles.store') }}">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="name" old="name" id="exampleInputName1" placeholder="Name">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
