@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">categorias</h1>
@stop

@section('content')
 
<a href="{{route('categories.create')}}" class="btn btn-primary">crear categoria</a>
<br><br>
<form action="{{ route('buscador.searchCategories') }}" method="GET">
    <fieldset enable>
        @csrf
        <input name ="buscador" type="text" id="disabledTextInput" class="form-control" placeholder="Buscar por Codigo de producto">
      </div>
      <div class="mb-3">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </fieldset>
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
    {{-- <div class = "d-flex justify-content-end">
        {!! $categorias->links() !!}
    </div> --}}
</div>
  



@stop

@section('css')
   
@stop

