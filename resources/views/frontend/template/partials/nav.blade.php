<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper deep-purple accent-1">
            <div class="container">
                <a href="{{ route('homepage')}}" class="brand-logo"> SistemPerpus</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                   @guest
                   <li><a href="{{ route('login')}}">Login</a></li>
                   <li><a href="{{ route('register')}}">Register</a></li>
                       
                   @else

                    <ul id="dropdown1" class="dropdown-content">
                        <li>
                            <a href="{{ route('home') }}">Account</a>
                        </li>
                        <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                        </li>
                    </ul>

                    
                    <li><a href="#" class="dropdown-trigger" data-target="dropdown1">{{ auth()->user()->name }}</a></li>
                   @endguest
                </ul>   
            </div>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
@guest
<li><a href="{{ route('login')}}">Login</a></li>
<li><a href="{{ route('register')}}">Register</a></li>

@else
<li><a href="{{ route('logout') }}"
    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
    {{ __('Logout') }}</a>
    </li>
@endguest
</ul>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>