@extends('layouts.app')

@section('title','Dashboard')

@section('content')
  @include('partials._sidebar')
  <div class="dashboard container">
    @if (Auth::user()->role=='1')
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Adminstration Page</h3>
        </div>
        <div class="panel-body ">
          <div class="col-md-3 well text-center all5">
            {{$users}}<br>Users
          </div>

          <div class="col-md-3 well text-center all5">
            {{$admins}}<br>Admins
          </div>

          <div class="col-md-3 well text-center all5">
            {{$employees}}<br>Employees
          </div>

          <div class="col-md-3 well text-center all5">
            {{$customers}}<br>Customers
          </div>

          <div class="col-md-3 well text-center all5">
            {{$cars}}<br>Cars
          </div>
        </div>
      </div>
    @else

    @endif
  </div>
@endsection
