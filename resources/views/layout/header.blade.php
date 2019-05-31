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
                            <li><a href="./">SERVICIOS</a>
                                <ul>
                                    <li><a href="{{ route('inscripcion') }}">Inscripciones</a></li>
                                    <li><a href="{{ url('promociones') }}">Promociones</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('contacto') }}">CONTACTO</a>
                            </li>
                            <li><a href="./">AUTENTICACION</a>
                                <ul>
                                    @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

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
                                        @endguest

                                </ul>
                            </li>
                            <li><a href="{{ route('roles') }}">ROLES</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
</header>