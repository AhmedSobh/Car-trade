@extends('layouts.app')

@section('title','Add Car')

@section('content')
  <div class="container top top20">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Edit</h3>
      </div>
      <div class="panel-body">
        {{ Form::model($car,['route'=>['cars.update',$car], 'method'=>'PUT','class'=>'top20 left10', 'enctype'=>'multipart/form-data'] ) }}
        <div class="row">
          <div class="form-group">
            <label class="col-md-2" for="name">Name:</label>
            <input type="text" name="name" class="col-md-10 margin-top-zero" value="{{$car->name}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label class="col-md-2" for="model">Model:</label>
            <input type="text" name="model" value="{{$car->model}}" class="col-md-10 margin-top-zero">
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label class="col-md-2" for="type">Type:</label>
            <input type="text" name="type" value="{{$car->type}}" class="col-md-10 margin-top-zero">
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label class="col-md-2" for="year">Year:</label>
            <input type="text" name="year" value="{{$car->year}}" class="col-md-10 margin-top-zero">
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label class="col-md-2" for="price">Price:</label>
            <input type="number" name="price" value="{{$car->price}}" class="col-md-10 margin-top-zero">
          </div>
        </div>
        <div class="form-group" id="image"><label class="col-md-2">Image(optional)</label><input type="file" class="col-md-10 margin-top-zero" name="file"></div>
        <input type="submit" value="Update" class="btn btn-primary">
      {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
