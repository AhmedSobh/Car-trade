@if (Session::has('success'))
    <div class="alert alert-success" id="notfication" role="alert">
      <i class="fa fa-times-circle-o pull-right" id="close"></i>
      <strong>Success:</strong><br> {{ Session::get('success') }}
    </div>

@endif

@if (Session::has('permission') )
    <div class="alert alert-warning" role="alert" id="notfication">
      <i class="fa fa-times-circle-o pull-right" id="close"></i>
      <strong>Warning:</strong><br> {{ Session::get('permission') }}
    </div>
@endif

@if ( $errors->any() )
  {{-- count($errors) >0 --}}
  <div class="alert alert-danger pull-right"  id="notfication" role="alert">
    <strong>Error:</strong>
    <i class="fa fa-times-circle-o pull-right" id="close"></i>
    @foreach ($errors->all() as $error)
      <ul>
          <li  style="list-style-type:none"><i class="fa fa-minus" ></i> {{ $error }}</li>
      </ul>
    @endforeach
  </div>

@endif