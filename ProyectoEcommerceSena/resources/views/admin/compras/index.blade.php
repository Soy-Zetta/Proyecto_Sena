<!-- resources/views/compras/index.blade.php -->
@extends('adminlte::page')

@section('content_header')
    <h1>Listado de Compras</h1>
@endsection

@section('content')
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($compras as $compra)
                    <tr>
                    
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->nombre}}</td>
                        <td>{{$categoria->descripcion}}</td>
                        <td><a href="{{route('shoppings.edit',$categoria->id)}}"class="btn btn-primary" >editar</a></td>
                        <td>
                            <form action="{{route('shoppings.destroy',$categoria->id)}}" method="POST">
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
            {!! $categorias->links() !!}
        </div>
    </div>
      
    
    
    
    @stop
    
    @section('css')
       
    @stop
    