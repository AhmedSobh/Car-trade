<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  @yield('title') </title>

    <!-- Icon of website -->
    <link type="image/x-icon" rel="shortcut icon" href="{{asset('images/icon.ico?')}}" >

    <!-- Fonts -->
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.css')}}" media="screen">
  	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel='stylesheet' id='camera-css'  href='{{asset('assets/css/camera.css')}}' type='text/css' media='all'>
    @yield('CSS')

</head>
<body>
  @include('partials/_navbar')
  @include('partials/_messages')


  @yield('content')

  <footer id="footer">
  <div class="footer2">
    <div class="container">
      <div class="row">

        <div class="col-md-6 panel">
          <div class="panel-body">
            <p class="simplenav">
              <a href="index.html">Home</a> |
              <a href="about.html">About</a> |
              <a href="courses.html">Cars</a> |
              <a href="contact.html">Contact</a>
            </p>
          </div>
        </div>

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="text-right">
                Copyright &copy; 2018.
              </p>
            </div>
          </div>

        </div>
        <!-- /row of panels -->
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="{{asset('assets/js/modernizr-latest.js')}}"></script>
	<script type='text/javascript' src='{{asset('assets/js/jquery.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('assets/js/fancybox/jquery.fancybox.pack.js')}}'></script>

    <script type='text/javascript' src='{{asset('assets/js/jquery.mobile.customized.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('assets/js/jquery.easing.1.3.js')}}'></script>
    <script type='text/javascript' src='{{asset('assets/js/camera.min.js')}}'></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	  <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
		jQuery(function(){

			jQuery('#camera_wrap_4').camera({
				height: '600',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
	</script>
  @yield('scripts')
  <!-- Custom Js -->
  <script src="{{asset('js/backend.js')}}"></script>
</body>
</html>
