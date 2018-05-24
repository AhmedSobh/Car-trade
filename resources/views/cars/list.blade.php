@extends('layouts.app')

@section('title','List Requests')

@section('content')
  <div class="container top top20">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">All Requests</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" >
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Customer Address</th>
                <th>Type</th>
                <th>Car name(Only in Buy)</th>
                <th>Created At</th>
                <th>Approve state</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($makes as $make)
                    <tr class="clickable-row" >
                      <th scope="row">{{ $make->id }}</th>
                      <td>{{ $make->customer->name }}</td>
                      <td>{{ $make->customer->phone}}</td>
                      <td>{{ $make->customer->address}}</td>
                      <td>{{ $make->type}}</td>
                      <td>{{ $make->car['name']}}</td>
                      <td>{{ $make->created_at  }}</td>
                      <td>{{$make->approve}}</td>
                      <td>
                        <a href="{{route('change',[$make,1])}}">Aprrove</a>
                        {{-- <input type="radio" data-make='{{$make->id}}' id="yes" name="approve{{$loop->iteration}}" {{$make->approve==1?'checked=""':''}} value="1">Yes<br>
                        <input type="radio" name="approve{{$loop->iteration}}" value="0" id="no" data-make='{{$make->id}}' {{$make->approve==0?'checked=""':''}}>No --}}
                      </td>
                    </tr>
                @endforeach
            </tbody>
            <div class="text-center">
              {{$makes->links()}}
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
