@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="container">
  <div class="well col-md-6 col-md-offset-3 text-center" style="margin-top:50px;">
    <h3 class="">Login</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
          <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
          <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
          <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>
          </div>
        </div>
        <input type="submit" name="Login" value="Login" class="btn btn-primary btn-block">
    </form>
  </div>
</div>
@endsection
