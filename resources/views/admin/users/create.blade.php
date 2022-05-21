@extends('layouts.admin')

@section('title', 'Create User')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create User</h4>
        <p class="card-description">
          Basic form elements
        </p>
        <form class="forms-sample" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old("name") }}" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ old("email") }}" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old("password") }}" id="exampleInputPassword4" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Role</label>
              <select class="form-control" name="role" value="{{ old("role") }}" id="exampleSelectGender">
                <option>Choose a role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->name }}">{{$role->name}}</option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
