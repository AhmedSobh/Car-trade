@extends('layouts.app')

@section('title','Dashboard')

@section('content')
  @include('partials._sidebar')
  <div class="dashboard container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">All Users</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" >
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="clickable-row" >
                      <th scope="row">{{ $user->id }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{ $user->address}}</td>
                      <td>
                        @if ($user->role==1)
                          Admin
                        @elseif ($user->role==2)
                          Employee
                        @elseif ($user->role==3)
                          Customer
                        @endif
                      </td>
                      <td>{{ $user->created_at  }}</td>
                      <th>
                        <div class="btn-group">
                          <a class="btn btn-success  btn-xs " href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye"></i> show</a>
                        </div>
                      </th>
                    </tr>
                @endforeach
            </tbody>
            <div class="text-center">
              {{$users->links()}}
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
