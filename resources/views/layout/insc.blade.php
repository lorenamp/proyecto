@extends('layout.home')

@section('content')

<div class="container">
    <h2>INSCRIPCIONES</h2>
    <form class="form-horizontal" method="POST" action="{{ route('inscripcion') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nombre Completo:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Nombre" name="nombre">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Domicilio</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pwd" placeholder="Domicilio" name="domicilio">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Tipo de Inscripcion</label>
            <div class="col-sm-10">
                <select class="form-control" name="t_inscripcion">
                    @foreach($typeinscritions as $typeinscrition)
                        <option value="{{$typeinscrition->codigo}}">{{$typeinscrition->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Tipo de Plan</label>
            <div class="col-sm-10">
                <select class="form-control" name="t_plan">
                    @foreach($typeplans as $typeplan)
                        <option value="{{$typeplan->codigo}}">{{$typeplan->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">REGISTRAR</button>
            </div>
        </div>
    </form>
</div>

    <br/>

@endsection