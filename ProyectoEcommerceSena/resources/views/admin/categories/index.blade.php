@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Categorías</h1>
@stop

@section('content')
    @can('categories.create')
        <a href="{{ route('categories.create') }}" class="btn btn-outline-primary">Crear categoría</a>
    @endcan

    <br><br>
    <form action="{{ route('buscador.searchCategories') }}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="buscador" placeholder="Buscar por Código de categoria" required>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
        </div>
    </form>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <!-- Aquí puedes agregar los campos y el botón para agregar una nueva categoría -->
    </form>

    <div>
        <table class="table table-striped table-dark mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->descripcion }}</td>
                        <td>
                            @can('categories.edit')
                                <a href="{{ route('categories.edit', $categoria->id) }}" class="btn btn-outline-primary">Editar</a>
                            @endcan

                            <!-- Modal de confirmación de eliminación -->
                            @can('categories.destroy')
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"  data-target="#confirmDeleteModal{{ $categoria->id }}"title="Eliminar">  <i class="fas fa-trash-alt" style="font-size: 12spx;"></i> 
                                    
                               </button>
                            @endcan

                            <!-- Modal de confirmación de eliminación -->
                            <div class="modal fade" id="confirmDeleteModal{{ $categoria->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="confirmDeleteModalLabel{{ $categoria->id }}"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteModalLabel{{ $categoria->id }}">
                                                Confirmar Eliminación</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-dark">¿Estás seguro de que deseas eliminar esta categoría?</p>
                                            <!-- Agrega la clase "text-dark" -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <form action="{{ route('categories.destroy', $categoria->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop

@section('css')

@stop






{{-- 
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
    </table> --}}
{{-- <div class = "d-flex justify-content-end">
        {!! $categorias->links() !!}
    </div> --}}
{{-- </div>
  



@stop

@section('css')
   
@stop --}}
