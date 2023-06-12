@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Productos</h1>
@stop

@section('content')
 
<a href="{{route('products.create')}}" class="btn btn-primary">crear categoria </a>
<br><br>

<div class="container">
    <div class="row">   
      
        <div>
            <form action="{{ route('buscador.search') }}" method="GET">
                @csrf
                <input type="text"name="buscador">
                <button type="submit">buscar</button>
            </form>
        </div>
        @foreach ($productos as $producto)
        <div class="col-md-4">
            <div class="card" style="width: 20rem">
                <!-- {{-- <a href="{{route('products.show',$producto->id)}}"> --}} -->
                  <img src="{{$producto->imagen}}" alt="Hyundai" class="card-img-top" >
                  <div class="card-body">
                     <p class="card-text">{{$producto->nombre}}</p>
                     <p class="card-text">{{$producto->precio}}</p>
                     <p class="card-text">existencias {{$producto->existencias}}</p>
                  </div>
               <!-- {{-- </a> --}} -->

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{route('products.edit',$producto->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    
                    <form action="{{route('products.destroy',$producto->id)}}" method="POST" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href={{asset("css/products.css")}}>
@stop

