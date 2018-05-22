<div class="nav-side-menu">
    <div class="brand">Car Trade</div>
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
                  <a href="{{route('cars.request')}}">
                  <i class="fa fa-plus fa-lg"></i> Make Request
                  </a>
                  </li>

                  @if (Auth::user()->role!=3)
                    <li>
                     <a href="{{route('cars.request.list')}}">
                     <i class="fa fa-list fa-lg"></i> Show Requests
                     </a>
                     </li>
                  @endif

                  <li>
                   <a href="{{route('cars.ticket')}}">
                   <i class="fa fa-ticket fa-lg"></i> Make Ticket
                   </a>
                   </li>

                   @if (Auth::user()->role!=3)
                     <li>
                      <a href="{{route('cars.ticket.list')}}">
                      <i class="fa fa-list fa-lg"></i> Show Tickets
                      </a>
                      </li>
                   @endif
            </ul>
     </div>
</div>
