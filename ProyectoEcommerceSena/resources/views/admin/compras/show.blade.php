@extends('adminlte::page')

@section('title', 'Detalles de Compra')

@section('content_header')
    <h1>Detalles de Compra</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Información de la Compra</h3>
            <p><strong>ID:</strong> {{ $compra->id }}</p>
            <p><strong>Proveedor:</strong> {{ $compra->proveedor->nombre }}</p>
            <p><strong>Total:</strong> {{ $compra->total }}</p>
            <p><strong>Fecha:</strong> {{ $compra->fecha }}</p>
            <p><strong>Estado:</strong> {{ $compra->estado }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3>Detalle de Productos</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($compra->detallecompra as $detalle)
                        <tr>
                            <td>{{ $detalle->id }}</td>
                            <td>{{ $detalle->producto->descripcion }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                            <td>{{ $detalle->precio }}</td>
                            <td>{{ $detalle->descripcion }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
master