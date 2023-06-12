
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Usuarios</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-heder">
            <input type="form-control" placeholder="Ingrese el nombre o cedula del usuario">
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped table-dark mt-5">
                    <thead>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>E-MAIL</th>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class = "d-flex justify-content-end">
                    {!! $usuarios->links() !!}
                </div>
            </div>
        </div>
    </div>
@stop
