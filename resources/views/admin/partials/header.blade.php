<header class="shadow-sm">
    <nav class="navbar navbar-expand-md   ">

        <div class="container-fluid px-3">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center np-link" href="{{url('/') }}">
                            Home
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </li>
                </ul>

                <div class="navbar-nav me-auto owner">
                    <h1> <a href="https://github.com/NicholasPaparusso"> Nicholas Paparusso Portfolio  <i class="fa-brands fa-github"></i></a></h1>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link np-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link np-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    @endif
                    @else


                        <div class="d-flex" aria-labelledby="navbarDropdown">

                            <a class="nav-link np-link" href="{{route('admin.home')}}">Admin</a>

                            <a class="nav-link np-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>