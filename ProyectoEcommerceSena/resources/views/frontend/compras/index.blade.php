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
                    
                        <td>{{$compra->id}}</td>
                        <td>{{$producto->Producto}}</td>
                        <td>{{$cliente->Cliente}}</td>
                        <td>{{$compra->Fecha}}</td>
                        <td>{{$producto->Cantidad}}</td>
                        <td>{{$compra->Precio}}</td>
                        <td><a href="{{route('shoppings.edit',$compra->id)}}"class="btn btn-primary" >editar</a></td>
                        <td>
                            <form action="{{route('shoppings.destroy',$compra->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class = "d-flex justify-content-end">
            {!! $categorias->links() !!}
        </div> --}}
    </div>
      
    
    
    
    @stop
    
    @section('css')
       
    @stop
    