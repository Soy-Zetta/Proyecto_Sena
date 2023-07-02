@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Productos</h1>
@stop

@section('content')

    @if (session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }}
        </div>
    @endif

    @can('products.create')
        <a href="{{ route('products.create') }}" class="btn btn-primary">Crear producto</a>
    @endcan

    <br><br>

    <form action="{{ route('buscador.search') }}" method="GET" class="mb-3">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="buscador" placeholder="Buscar por Código de producto" required>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <br><br>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Código</th>
                <th>Precio</th>
                <th>Existencias</th>
                <th>Disponibilidad</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->existencias }}</td>
                    <td>
                        @if ($producto->disponible)
                            Disponible
                        @else
                            No disponible
                        @endif
                    </td>
                    <td>
                        <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" width="100"
                            height="100">
                    </td>
                    <td>
                        <div class="d-flex">
                            @can('products.edit')
                                <a href="{{ route('products.edit', $producto->id) }}"
                                    class="btn btn-primary btn-sm mr-2">Editar</a>
                            @endcan

                            @can('products.delete')
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#confirmDeleteModal{{ $producto->id }}">Eliminar</button>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal de confirmación de eliminación -->
    @foreach ($productos as $producto)
        
            <div class="modal fade" id="confirmDeleteModal{{ $producto->id }}" tabindex="-1" role="dialog"
                aria-labelledby="confirmDeleteModalLabel{{ $producto->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel{{ $producto->id }}">Confirmar eliminación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que deseas eliminar este producto?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            
                            <form action="{{ route('products.destroy', $producto->id) }}" method="POST"
                                id="deleteForm{{ $producto->id }}">
                                
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@stop
