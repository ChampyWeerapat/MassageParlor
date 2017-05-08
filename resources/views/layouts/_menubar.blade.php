<div class="flex-center position-ref bg-logo">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="links">
            <a href="/">Home</a>
            <a href="/reservation">Reservation</a>
            <a href="">Package & Promotion</a>
            <a href="">Massager</a>
            <a href="contact">Contact Us</a>
        </div>
    </div>

    <hr>
