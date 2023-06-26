@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Usuarios</h1>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.users.create') }}" class="btn btn-success">Crear Usuario</a>
    <br><br>

    <form action="{{ route('buscador.search') }}" method="GET">
        <fieldset enable>
            @csrf
        </fieldset>
    </form>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-dark mt-5">
                    <div class="mb-3">
                        <input name="buscadorusuario" type="text" id="disabledTextInput" class="form-control"
                            placeholder="Buscar por numero de identificación o correo electronico">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>

                    <thead>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>ROL</th>
                        <th>NUMERO DOCUMENTO</th>
                        <th>E-MAIL</th>

                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->apellido }}</td>
                                <td>
                                    @if ($usuario->roles->isNotEmpty())
                                        @foreach ($usuario->roles as $rol)
                                            {{ $rol->name }}
                                        @endforeach
                                    @else
                                        Sin Rol
                                    @endif
                                </td>
                                <td>{{ $usuario->num_documento }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $usuario->id) }}"
                                        class="btn btn-primary">editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.users.destroy', $usuario->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {!! $usuarios->links() !!}
                </div>
            </div>
        </div>
    </div>
@stop
