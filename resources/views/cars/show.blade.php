@extends('layouts.app')

@section('title','Show Car')

@section('content')
  <div class="container top top20">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-8">
            <div class="well">
              <div class="row text-center">
                <div class="cars thumbnail">
                  <img src="{{asset('assets/'.$car->image)}}" style="height:250px" alt="{{$car->name}}">
                </div>
              </div>
              <br>
              <form enctype="multipart/form-data" class="text-center"action="{{route('cars.update',$car)}}" method="PUT">
                @csrf
              <div class="row">
                <div class="form-group">
                  <label class="col-md-2" for="name">Name:</label>
                  <p class="col-md-10 margin-top-zero" id="name">{{$car->name}}</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label class="col-md-2" for="model">Model:</label>
                  <p class="col-md-10 margin-top-zero" id="model">{{$car->model}}</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label class="col-md-2" for="type">Type:</label>
                  <p class="col-md-10 margin-top-zero" id="type">{{$car->type}}</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label class="col-md-2" for="year">Year:</label>
                  <p class="col-md-10 margin-top-zero" id="year">{{$car->year}}</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label class="col-md-2" for="price">Price:</label>
                  <p class="col-md-10 margin-top-zero" id="price">{{$car->price}}</p>
                </div>
              </div>
            </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="well">
              <div class="row">
        					<label class="col-md-5">تاريخ التسجيل:</label>
        					<p class="col-md-5">{{$car->created_at}}</p>
              </div>
              <div class="row">
                @if (Auth::user()->role!=3)
                  <div class="col-md-6">
                    <a href="{{route('cars.edit',$car)}}" class="btn btn-warning mt-ladda-btn ladda-button btn-circle">Edit</a>
                  </div>
                @endif
                @if (Auth::user()->role==1)
                  <div class="col-md-6">
                    <a href="#" data-target="#deleteConfirmModal" data-toggle="modal" class="btn btn-danger red mt-ladda-btn ladda-button btn-circle"> Delete</a>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- delete content -->
  <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Delete{{$car->name}}</h4>
              </div>
              <div class="modal-body">
                  <p>This car information will be deleted permentally</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-circle btn-circle-sm" data-dismiss="modal">cancel</button>
                  <button type="submit" class="btn btn-danger btn-circle btn-circle-sm" id="delete" data-dismiss="modal">Delete</button>
                  {{ Form::open(['route'=>['cars.delete',$car],"method"=>"DELETE" ,'style'=>'display:none;', 'id'=>'delete-form' ]) }}
                  {{ Form::close() }}
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
@endsection
