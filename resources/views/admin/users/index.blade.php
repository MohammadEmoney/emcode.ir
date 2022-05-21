@extends('layouts.admin')

@section('title', 'Users')

@section('content')

@include('layouts.admin.breadcrumb', ['route' => route('users.create')])

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description">
        Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>User</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="py-1">
                    @if($user->avatar)
                        <img src="{{$user->avatar->src}}" alt="{{ $user->name }}">
                    @else
                        <img src="{{ asset('panel/images/avatar.png') }}" alt="image"/>
                    @endif
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">{{ $user->name }} {{ $user->roles ? "({$user->roles->first()->name})" : "" }}</a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td><button type="button" class="btn btn-{{ $user->active ? "primary" : "danger"}} btn-sm">{{ $user->active ? "Active" : "Not Active" }}</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>

@endsection
