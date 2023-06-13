
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Usuarios</h1>
@stop

@section('content')



<a href="{{route('products.create')}}" class="btn btn-primary">Crear Usuario</a>
<br><br>

<form action="{{ route('buscador.search') }}" method="GET">
    <fieldset enable>
        @csrf
        <input name ="buscadorusuario" type="text" id="disabledTextInput" class="form-control" placeholder="Buscar por numero de identificación o correo electronico">
      </div>
      <div class="mb-3">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </fieldset>
  </form>

    <div class="container">
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
                            <td><a href="{{route('admin.users.edit',$usuario->id)}}"class="btn btn-primary" >editar</a></td>      
                            <td>
                                <form action="{{route('admin.users.destroy',$usuario->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">eliminar</button>
                                </form>
                            </td>                      
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


