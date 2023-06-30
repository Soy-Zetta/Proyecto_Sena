@extends('adminlte::page')

@section('title', 'Crear Pedido')

@section('content_header')
    <h1 class="m-0 text-dark">Crear Pedido</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.pedidos.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="cliente_numero_documento">Número de Documento del Cliente</label>
                    <input type="text" class="form-control" id="cliente_numero_documento" name="cliente_numero_documento" required>
                </div>

                <div class="form-group">
                    <label for="producto_id">Producto</label>
                    <select class="form-control" id="producto_id" name="producto_id" required>
                        <option value="">Seleccione un producto</option>
                        @foreach ($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                </div>

                <button type="submit" class="btn btn-primary">Crear Pedido</button>
            </form>
        </div>
    </div>
@stop



            master