@extends('layout.home')

@section('content')

    <div class="container">
        <h2>CONTACTO</h2>
        <p>¿Tienes dudas? Consulta nuestra sección de Preguntas Frecuentes o revisa nuestra sección de ayuda,
            favor de realizarla aquí </p>
        <div class="panel panel-default">

                <form class="form-horizontal" method="POST" action="{{ route('contacto') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="usr">Nombre:</label>
                            <input type="text" class="form-control" id="usr" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Correo electronico:</label>
                            <input type="text" class="form-control" id="pwd" name="correo">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Telefono:</label>
                            <input type="password" class="form-control" id="pwd" name="telefono">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Localidad:</label>
                            <input type="password" class="form-control" id="pwd" name="localidad">
                        </div>

                            <div class="form-group">
                                <label for="comment">Comentario:</label>
                                <textarea class="form-control" rows="5" id="comment" name="comentario"></textarea>
                            </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">ENVIAR</button>
                        </div>
                </form>
        </div>
    </div>


@endsection