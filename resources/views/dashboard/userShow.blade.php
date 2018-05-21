@extends('layouts.app')

@section('title','Dashboard')

@section('content')
  @include('partials._sidebar')
  <div class="dashboard container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">User Information</h3>
      </div>
      <div class="panel-body top20 left10">
        <form  action="{{route('user.update',$user->id)}}" method="post">
          @csrf
          <div class="form-group row ">
            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
              <p>{{$user->name}}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <div class="col-md-6">
              <p>{{$user->email}}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone" class="col-sm-4 col-form-label text-md-right">{{ __('Phone') }}</label>
            <div class="col-md-6">
              <p>{{$user->phone}}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-4 col-form-label text-md-right">{{ __('Address') }}</label>
            <div class="col-md-6">
              <p>{{$user->address}}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Role') }}</label>
            <div class="col-md-6">
              <select  name="role">
                <option value="1" {!! $user->role==1?'selected':'' !!}>Admin</option>
                <option value="2" {!! $user->role==2?'selected':'' !!}>Employee</option>
                <option value="3" {!! $user->role==3?'selected':'' !!}>Customer</option>
              </select>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <input type="submit" value="Update" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
@endsection
