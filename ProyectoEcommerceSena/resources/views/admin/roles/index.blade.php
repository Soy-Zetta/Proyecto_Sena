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
    @can('admin.roles.create')
        <a href="{{ route('admin.roles.create') }}" class="btn btn-outline-success">Crear Rol</a>
    @endcan

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-dark mt-5">

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
                                    @can('admin.roles.edit')
                                        <a href="{{ route('admin.roles.edit', $role->id) }}"class="btn btn-outline-primary">editar</a>
                                    @endcan
                                </td>

                                <td width="10px">
                                    @can('admin.roles.destroy')
                                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">eliminar</button>
                                        </form>
                                    @endcan

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
