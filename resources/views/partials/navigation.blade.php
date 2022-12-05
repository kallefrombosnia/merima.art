<header id="header" role="banner">
    <div class="container text-center">
        <div id="logo" class="object-none object-center">
            <a href="#"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a  @if(Route::is('homepage')) class="line-through" @endif href="{{ route('homepage') }}">Home</a></li>
                <li><a  @if(Route::is('about')) class="line-through" @endif href="{{ route('about') }}">About</a></li>
                <li><a  @if(Route::is('contact')) class="line-through" @endif href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>