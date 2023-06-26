@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Roles</h1>
@stop

@section('content')


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <a href="{{ route('admin.roles.create') }}" class="btn btn-success">Crear Rol</a>
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
                        <tr>
                            <th>ID</th>
                            <th>ROLES</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('admin.roles.edit', $role->id) }}"class="btn btn-primary">editar</a>
                                </td>

                                <td width="10px">
                                    <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-end">
                    {!! $roles->links() !!}
                </div> --}}
            </div>
        </div>
    </div>
@stop
