@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">proveedor</h1>
@stop

@section('content')
 
<a href="{{route('proveedores.create')}}" class="btn btn-primary">CREAR PROVEEDORES</a>
<br><br>

<form action="#" method="GET">
    @csrf
    <input type="text" name="buscadorproveedores">
    <button type="submit">buscar</button>
</form>

<form action="{{route('proveedores.store')}}">

</form>

<div>
    <table class="table table-striped table-dark mt-5">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    
                    <td>{{$proveedor->id}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->descripcion}}</td>
                    <td><a href="{{route('proveedores.edit',$proveedor->id)}}"class="btn btn-primary" >editar</a></td>
                    <td>
                        <form action="{{route('proveedores.destroy',$proveedor->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
  



@stop

@section('css')
   
@stop
