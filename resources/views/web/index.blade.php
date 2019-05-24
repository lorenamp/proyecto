@extends('layout.home')

@section('content')

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
                        <li><a href="index-1.html">SERVICIOS</a>
                            <ul>
                                <li><a href="#">Inscripciones</a></li>
                                <li><a href="#">Promociones</a></li>
                                <li><a href="#">Clases FIT</a></li>

                            </ul>
                        </li>

                        <li><a href="index-3.html">PREGUNTAS</a>
                        </li>
                        <li><a href="index-4.html">CONTACTANOS</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--
    ========================================================
                                CONTENT
    ========================================================
    -->
    <main>
        <section class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-src="images/3.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="row">
                                <div class="preffix_6 grid_6">¡INSCRÍBETE YA!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-src="images/2.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="row">
                                <div class="preffix_6 grid_6">PLANES Y HORARIOS A TU MEDIDA</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-src="images/1t.png">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="row">
                                <div class="preffix_6 grid_6">CLASES EN GRUPO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div style="align:center" class="container banner_wr">
                <ul class="banner">
                    <li>

                        <h3>PLAN FIT</h3>
                        <p>Horario de entrenamiento sin multa de cancelación<br/>Desde*</p><br/>
                        <h1>$300.00*</h1><br/>
                        <p>Inscripción: En todas las unidades</p><br/>
                        <p>Mantenimiento anual: $500.00*</p>
                    </li>
                    <li>
                        <h3>PLAN ACTIVE</h3>
                        <p>Entrena en cualquiera de nuestros gimnasios<br/>Desde*</p><br/>
                        <h1>$499.00*</h1><br/>
                        <p>Inscripción: En todas las unidades y online</p><br/>
                        <p>Mantenimiento anual: $599.00*</p>
                    </li>
                    <li>
                        <h3>PLAN FIT-TEAM</h3>
                        <p>Toma clases en grupo en cualquiera de nuestros gimnasios<br/>Desde*</p><br/>
                        <h1>$349.00*</h1><br/>
                        <p>Inscripción: En todas las unidades y online</p><br/>
                        <p>Mantenimiento anual: $499.00*</p>
                    </li>
                    <li>
                        <h3>PLAN BLACK</h3>
                        <p>Menbresia Anual<br/>Desde*</p><br/>
                        <h1>$5,999.00*</h1><br/>
                        <p>Inscripción: En todas las unidades y online</p><br/>
                        <p>Con multa por cancelación*</p>
                    </li>

                </ul>
            </div>
        </section>

        <section class="well1">
            <div class="container">
                <div class="row">
                    <div class="grid_4">
                        <h2>Concepto GYM-FIT</h2><img src="images/5.jpg" alt="">
                        <p>GYM-FIT inicia en México en el 2010, creado con el propósito de entregar Fitness de Alta Calidad para Todos,con planes accesibles e inscripción rápida y sencilla.</p>
                    </div>
                    <div class="grid_4">
                        <h2>Servicios y actividades</h2>
                        <p>Contamos con servicios de alta calidad para el bienestar y desempeño físico de nuestros clientes</p>
                        <ul class="marked-list">
                            <li>Área de peso libre e integrado</li>
                            <li>Área de cardio</li>
                            <li>Vestidores y Regaderas</li>
                            <li>Sillones de masaje</li>
                            <li>Cabina de bronceado y colágeno</li>
                            <li>Área de musculación y entrenamiento aeróbico</li>
                            <li>Clases Abiertas</li>
                            <li>Playera exclusiva</li>
                            <li>Invitar un amigo</li>

                    </div>
                    <div class="grid_4">
                        <div class="info-box">
                            <h2 class="fa-comment">Pregunta por nuestras promociones</h2>

                            <dl>
                                <dt>Lunes - Viernes:</dt>
                                <dd>5am-10pm</dd>
                            </dl>
                            <dl>
                                <dt>Sábados:</dt>
                                <dd>8am-5pm</dd>
                            </dl>
                            <dl>
                                <dt>Domingos:</dt>
                                <dd>1pm-5pm</dd>
                            </dl>
                            <hr>
                            <h3>Llamanos:</h3>
                            <dl>
                                <dt>01800-1212-9089</dt>
                            </dl>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--
    ========================================================
                                FOOTER
    ========================================================
    -->
    <footer>
        <section class="well3">
            <div class="container">
                <ul class="row contact-list">
                    <li class="grid_4">
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-map-marker"></div>
                            </div>
                            <div class="box_cnt__no-flow">
                                <address>Av. Jacarandas<br/>no.28</address>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-envelope"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="mailto:#">info@gymfitness.org</a></div>
                        </div>
                    </li>
                    <li class="grid_4">
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-phone"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="callto:#">01800-1212-9089</a></div>
                        </div>
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-fax"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="callto:#">400-9090-2223</a></div>
                        </div>
                    </li>
                    <li class="grid_4">
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-facebook"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="#">Siguenos en facebook</a></div>
                        </div>
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-twitter"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="#">Siguenos en Twitter</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section>

        </section>
    </footer>
    </div>
    <script src="{{asset('js/script.js')}}"></script>

    @endsection