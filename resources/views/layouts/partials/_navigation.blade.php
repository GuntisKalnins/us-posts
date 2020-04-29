<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark shadow-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
        US Posts ({{ $area->name }})
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ route('category.index', [$area]) }}">Categories</a></li>

            <form class="align-self-center mt-2 pl-2" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick" />
                <input type="hidden" name="hosted_button_id" value="A2NXP8YEXG6EL" />
                <input  type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" src="https://www.paypal.com/en_LV/i/scr/pixel.gif" width="1" height="1" />
            </form>
        </ul>
            
        
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
        <li class="nav-item active"><a class="nav-link" href="{{ route('listings.create', [$area]) }}">New listing</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{ route('listings.viewed.index', [$area]) }}">Recently viewed</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{ route('listings.favourites.index', [$area]) }}">Favourites</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{ route('listings.published.index', [$area]) }}">My listings</a></li>



        <li class="nav-item active dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>
              
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
            
        </ul>
    </div>
</nav>
