@extends('layouts.app')

@section('title','Add Car')

@section('content')
  <div class="container top top20">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Make Request</h3>
      </div>
      <div class="panel-body">
        {{ Form::open(['route'=>['cars.make.request'], 'method'=>'POST','class'=>'top20 left10'] ) }}
        <div class="row">
          <div class="form-group">
            <label class="col-md-2" for="name">Type:</label>
            <select name="type">
              <option value="sell">Sell</option>
              <option value="rent">Rent</option>
              <option value="buy">Buy</option>
            </select>
          </div>
        </div>
        <input type="submit" value="Request" class="btn btn-primary">
      {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
