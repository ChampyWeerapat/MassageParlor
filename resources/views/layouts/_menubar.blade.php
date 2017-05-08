<div class="flex-center position-ref bg-logo">
    <!-- @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif -->

    @if(Auth::guest())
      <div class="top-right links">
          <a href="{{ url('/login') }}">Login</a>
          <a href="{{ url('/register') }}">Register</a>
      </div>
    @else
      <div class="top-right links">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
      </div>


    @endif


    <div class="content">
        <div class="links">
            <a href="/">Home</a>
            <a href="/reservation">Reservation</a>
            <a href="">Package & Promotion</a>
            <a href="/massager">Massager</a>
            <a href="/contact">Contact Us</a>
        </div>
        @role('owner')
          <div class="links" >
              <a style="color:red" href="/add-employee">Add employee</a>
              <a style="color:red" href="/voucher">Generate Vochers</a>
              <a style="color:red" href="">Add Promotion</a>
          </div>
        @endrole
    </div>



    <hr>
