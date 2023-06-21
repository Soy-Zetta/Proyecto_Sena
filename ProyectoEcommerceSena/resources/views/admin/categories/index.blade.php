@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">categorias</h1>
@stop

@section('content')
 
<a href="{{route('categories.create')}}" class="btn btn-primary">crear categoria</a>
<br><br>
<form action="#" method="GET">
    
    @csrf
    <input type="text" name="buscadorcategorias">
    <button type="submit">buscar</button>
</form>

<form action="{{route('categories.store')}}"></form>

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
            @foreach ($categorias as $categoria)
                <tr>
                    
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombre}}</td>
                    <td>{{$categoria->descripcion}}</td>
                    <td><a href="{{route('categories.edit',$categoria->id)}}"class="btn btn-primary" >editar</a></td>
                    <td>
                        <form action="{{route('categories.destroy',$categoria->id)}}" method="POST">
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

