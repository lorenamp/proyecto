@extends('layout.home')

@section('content')

    @role('admin')
        <div class="container">
            <h2>Usuarios</h2>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>ROL ASIGNADO</th>
                        <th>ROLES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <form method="POST" action="{{ url('/home/asignar/')}}">
                                {{ csrf_field() }}
                            <td><input id="user" type="text" class="form-control" name="user" value="{{$user->id}}" required></td>
                            <td><input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required></td>
                            <td><input id="email" type="text" class="form-control" name="email" value="{{$user->email}}" required></td>
                            <td>{{$user->roles()->first()->name ?? "Sin rol"}}</td>

                            <td><select class="form-control" name="roles">
                                    @forelse ($roles as $role)
                                        <option value="{{$role->id}}">{{ $role->display_name }}</option>
                                    @empty
                                        <option value="">Sin role</option>
                                    @endforelse
                                </select></td>
                             <td><button type="submit" class="btn btn-success">Asigar rol</button></td>
                            </form>
                        </tr>

                    @empty
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container">
            <h2>Roles</h2>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td><input id="password" type="text" class="form-control" name="{{$role->display_name}}" value="{{$role->display_name}}" required></td>
                            <td><input id="password" type="text" class="form-control" name="{{$role->description}}" value="{{$role->description}}" required></td>
                        </tr>
                    @empty
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container">
            <h2>Permisos</h2>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($permissions as $permission)
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td><input type="text" class="form-control" name="{{$permission->display_name}}" value="{{$permission->display_name}}" required></td>
                            <td><input type="text" class="form-control" name="{{$permission->description}}" value="{{$permission->description}}" required></td>
                        </tr>
                    @empty
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <h2>Inscripciones</h2>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>CODIGO INSCRIPCION</th>
                        <th>CODIGO PLAN</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($inscriptions as $inscription)
                        <tr>
                            <td>{{$inscription->nombre}}</td>
                            <td>{{$inscription->domicilio }}</td>
                            <td>{{$inscription->t_inscripcion }}</td>
                            <td>{{$inscription->t_plan }}</td>
                            <form method="POST" action="{{ url('/home/eliminar', $inscription->id )}}">
                                {{ csrf_field() }}
                                <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form>
                        </tr>
                    @empty
                        <tr>
                            No hay inscripciones
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="container">
            <h2>Inscripciones</h2>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>CODIGO INSCRIPCION</th>
                        <th>CODIGO PLAN</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($inscriptions as $inscription)
                        <tr>
                            <td>{{$inscription->nombre}}</td>
                            <td>{{$inscription->domicilio }}</td>
                            <td>{{$inscription->t_inscripcion }}</td>
                            <td>{{$inscription->t_plan }}</td>
                            <form method="POST" action="{{ url('/home/eliminar', $inscription->id )}}">
                                {{ csrf_field() }}
                                <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form>
                        </tr>
                    @empty
                        <tr>
                            No hay inscripciones
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endrole




@endsection