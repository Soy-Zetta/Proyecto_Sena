@extends('adminlte::page')

@section('title', 'Lista de Pedidos')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Pedidos</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pedidos</h3>
        </div>
        <div class="card-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Número de Documento del Cliente</th>
                        <th>Producto</th>
                        <th>Fecha</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->cliente_numero_documento }}</td>
                            <td>{{ $pedido->producto->nombre }}</td>
                            <td>{{ $pedido->fecha }}</td>
                            <td>{{ $pedido->cantidad }}</td>
                            <td>{{ $pedido->precio }}</td>
                           <td>
                             <a href="{{ route('admin.pedidos.edit', $pedido->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('admin.pedidos.destroy', $pedido->id) }}" method="POST" class="d-inline">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este pedido?')">Eliminar</button>
                                </form>
                                <!-- Botón "Ver Detalles" fuera de la lista -->
            <a href="{{ route('admin.pedidos.show', $pedido->id) }}" class="btn btn-Info">Ver Detalles</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
@stop