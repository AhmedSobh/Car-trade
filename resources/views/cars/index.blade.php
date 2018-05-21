@extends('layouts.app')

@section('title','Dashboard')

@section('content')
  @include('partials._sidebar')
  <div class="dashboard container">
    <div class="row">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">All Cars</h>
          @if (Auth::user()->role==1)
            <a href="{{ route('cars.create') }}" class=" btn-xs pull-right">Add Car</a>
          @endif
        </div>
        <div class="panel-body">
          @foreach ($cars as $car)
            <div class="col-md-3">
              <img src="{{asset('assets/img/'.$car->image)}}" alt="{{$car->name}}">
              <a href="{{route('cars.show', $car->id)}}">{{$car->name}}</a>
            </div>
          @endforeach
          </div>
        </div>
    </div>
  </div>
@endsection
