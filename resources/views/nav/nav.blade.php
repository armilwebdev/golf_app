<nav class="navbar navbar-expand-md navbar-light bg-clear not-container">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/golf-icon.png') }}"  class="golf-icon" >
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::segment(1) === 'about' ? 'active' : null }}" href="{{ url('about' )}}">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ Request::segment(1) === 'login' ? 'active' : null }}" href="{{ url('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link register-link" href="register">Register</a>
                        </li>
                    @endif
                @else
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : null }}" href="{{ url('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link  {{ Request::segment(1) === 'modify_bag' ? 'active' : null }}" href="{{ url('modify_bag' )}}">Bag</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'club_distance' ? 'active' : null }}" href="{{ url('club_distance' )}}">Golf Range</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'distances' ? 'active' : null }}" href="{{ url('distances' )}}">Distances</a>
                </li>
                
                <li class="nav-item">
                        <a class="nav-link  {{ Request::segment(1) === 'about' ? 'active' : null }}" href="{{ url('about' )}}">About</a>
                </li>
                <li class="nav-item dropdown">
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
    </div>
</nav>