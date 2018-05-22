<div class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.html">
        <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav pull-right mainNav">
        <li class="active"><a href="{{url('/')}}">Home</a></li>
        {{-- <li><a href="#">About</a></li> --}}
        <li><a href="{{route('cars.index')}}">Cars</a></li>
        {{-- <li><a href="contact.html">Contact</a></li> --}}
        @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Sign up</a></li>
        @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                <a href="{{ route('dashboard') }}" style="margin-top:10px; margin-left:20px"><b>Dashboard</b></a><br>
                @if (Auth::user()->role==1)
                  <a href="{{ route('cars.create') }}" style="margin-top:10px; margin-left:20px"><b>Add Car</b></a><br>
                @endif
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" style="margin-top:10px; margin-left:20px">
                      <b>{{ __('Logout') }}</b>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>

              </div>
          </li>
        @endguest

      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>
<!-- /.navbar -->
