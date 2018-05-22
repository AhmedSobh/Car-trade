@extends('layouts.app')

@section('title','Cars')

@section('content')
  <div class="container top top20">
    <div class="row">
          <div class="">
            <h1 style="width:150px;">All Cars:</h1><br>

          </div>
            @foreach ($cars as $car)
              <div class="col-sm-3 cars">
                <a href="{{route('cars.show', $car->id)}}" class="thumbnail text-center">
                  <img src="{{asset('assets/'.$car->image)}}" style="height:120px" alt="{{$car->name}}">
                  <br>
                  <b>{{$car->name}}</b>
                  <br>
                  <b>{{$car->price}}</b>
                </a>
              </div>
            @endforeach
            <div class="text-center">
              {{$cars->links()}}
            </div>
    </div>
  </div>
@endsection
