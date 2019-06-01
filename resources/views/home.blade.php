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
                        <th>ROLE</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><input id="password" type="text" class="form-control" name="{{$user->name}}" value="{{$user->name}}" required></td>
                            <td><input id="password" type="text" class="form-control" name="{{$user->email}}" value="{{$user->email}}" required></td>
                            <td><select class="form-control" name="roles">
                                    @forelse ($roles as $role)
                                        <option value="{{$role->id}}">{{ $role->display_name }}</option>
                                    @empty
                                        <option value="0">Sin role</option>
                                    @endforelse
                                </select></td>
                            <td><button class="btn btn-danger">Eliminar</button></td>
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
                        <th></th>
                        <th></th>
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
                            <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <button class="btn btn-success">Nuevo Rol</button>
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
                        <th></th>
                        <th></th>
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
                            <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <button class="btn btn-success">Nuevo Permiso</button>
            </div>
        </div>
    @else
        <div class="container">
            <h2></h2>
            <div class="panel panel-default">
            </div>
        </div>
    @endrole




@endsection