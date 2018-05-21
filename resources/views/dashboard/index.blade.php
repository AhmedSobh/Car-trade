@extends('layouts.app')

@section('title','Dashboard')

@section('content')
  @include('partials._sidebar')
  <div class="container">
    @if (Auth::user()->role=='1')

    @else

    @endif
  </div>
@endsection
