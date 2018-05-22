@extends('layouts.app')

@section('title','Add Car')

@section('content')
  <div class="container top top20">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Add Car</h3>
      </div>
      <div class="panel-body top20 left10">
        <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row ">
            <label for="Name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            </div>
          </div>

          <div class="form-group row">
            <label for="Model" class="col-sm-4 col-form-label text-md-right">{{ __('Model') }}</label>
            <div class="col-md-6">
              <input id="Model" type="text" class="form-control" name="model" value="{{ old('model') }}" required autofocus>
            </div>
          </div>

          <div class="form-group row">
            <label for="type" class="col-sm-4 col-form-label text-md-right">{{ __('Type') }}</label>
            <div class="col-md-6">
              <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required autofocus>
            </div>
          </div>

          <div class="form-group row">
            <label for="year" class="col-sm-4 col-form-label text-md-right">{{ __('Year') }}</label>
            <div class="col-md-6">
              <input id="year" type="text" class="form-control" name="year" value="{{ old('year') }}" required autofocus>
            </div>
          </div>

          <div class="form-group row">
            <label for="Price" class="col-sm-4 col-form-label text-md-right">{{ __('Price') }}</label>
            <div class="col-md-6">
              <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required autofocus>
            </div>
          </div>
          <div class="form-group row">
            <label for="image" class="col-sm-4 col-form-label text-md-right">{{ __('Image(optional)') }}</label>
            <div class="col-md-6">
              <input id="image" type="file" class="form-control" name="file" autofocus>
            </div>
          </div>
          <input type="submit" value="Add" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
@endsection
