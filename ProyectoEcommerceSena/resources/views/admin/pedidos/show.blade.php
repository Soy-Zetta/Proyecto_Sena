@extends('adminlte::page')
@section('title','Detalle del Pedido')

@section('contect_header')
    <h1>Detalle del Pedido</del></h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Total: ${{ $pedido->getTotal() }}</h2>

            <h3>Información del Pedido:</h3>
            <p><strong>ID:</strong> {{ $pedido->id }}   </p>
            <p><strong>Cliente:</strong> {{     $pedido->cliente_numero_documento }}</p>
            <p><strong>Producto:</strong> {{    $pedido->producto_id }}</p>
            <p><strong>Fecha:</strong> {{   $pedido->fecha }}</p>
            <p><strong>Cantidad:</strong> {{    $pedido->cantidad }}</p>
            <p><strong>Precio:</strong> ${{     $pedido->precio }}</p>
            <!-- Agrega aquí más detalles del pedido    si los deseas -->
        </div>
    </div>
@endsection


