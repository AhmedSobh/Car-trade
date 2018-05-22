@extends('layouts.app')

@section('title','Add Ticekt')

@section('content')
  <div class="container top top20">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Make Request</h3>
      </div>
      <div class="panel-body">
        {{ Form::open(['route'=>['cars.make.ticket'], 'method'=>'POST','class'=>'top20 left10'] ) }}
        <div class="row">
          <div class="form-group">
            <label class="col-md-2" for="name">Message:</label>
            <textarea name="message" rows="8" cols="80"></textarea>
          </div>
        </div>
        <input type="submit" value="Send" class="btn btn-primary">
      {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
