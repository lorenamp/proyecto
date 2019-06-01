<header>
    <div class="container">
        <div class="brand">
            <h1 class="brand_name"><a href="./">GYM</a></h1>
            <p class="brand_slogan">Fitness</p>

            <div id="stuck_container" class="stuck_container">
                <div class="container">
                    <nav class="nav">
                        <ul data-type="navbar" class="sf-menu">
                            <li class="active"><a href="./">NOSOTROS</a>
                            </li>
                            <li><a>SERVICIOS</a>
                                <ul>
                                    <li><a href="{{ route('inscripcion') }}">Inscripciones</a></li>
                                    <li><a href="{{ route('promociones') }}">Promociones</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('contacto') }}">CONTACTO</a>
                            </li>
                            @auth
                            <li><a href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu">
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
                            </li>
                            @else
                            <li><a>Autenticar</a>
                                <ul>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
</header>