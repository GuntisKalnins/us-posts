<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark shadow-sm">
    <a class="navbar-brand m-0 pt-0" href="{{ url('/') }}">
        <img src="/storage/uploads/logo.png" width="25" alt="brand-logo" class="d-inline-block align-middle">
        <span class="d-inline-block align-middle">US Posts ({{ $area->name }})</span>        
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link text-primary" href="http://uk-posts.com">UK Posts</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ route('category.index', [$area]) }}">Categories</a></li>
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
            <li class="nav-item active"><a class="nav-link" href="{{ route('listings.favourites.index', [$area]) }}">Favourites</a></li>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <li class="nav-item active"><a class="dropdown-item" href="{{ route('listings.viewed.index', [$area]) }}">Recently viewed</a></li>
                <li class="nav-item active"><a class="dropdown-item" href="{{ route('listings.published.index', [$area]) }}">My listings</a></li>
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
