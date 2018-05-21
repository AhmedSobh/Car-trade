<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li class="{!! Request::is('dashboard') ? "active" : '' !!}">
                  <a href="{{route('dashboard')}}">
                  <i class="fa fa-dashboard fa-lg "></i> Dashboard
                  </a>
                </li>

                @if (Auth::user()->role==1)
                  <li class="{!! Request::is('users') ? "active" : '' !!}">
                    <a href="{{route('users')}}">
                    <i class="fa fa-users fa-lg "></i> Users
                    </a>
                  </li>
                @endif


                <li data-toggle="collapse" data-target="#service" class="collapsed" class="{!! Request::is('cars') ? "active" : '' !!}">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Cars <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                  <li><a href="{{route('cars.index')}}">All Cars</a></li>
                  @foreach ($carsG as $car)
                    <li><a href="{{route('cars.show',$car->id)}}">{{$car->name}}</a></li>
                    @break($loop->iteration==4)
                  @endforeach
                </ul>



                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>
            </ul>
     </div>
</div>
