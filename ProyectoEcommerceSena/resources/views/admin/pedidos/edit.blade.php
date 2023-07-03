@extends('adminlte::page')

@section('title', 'Editar Pedido')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Pedido</h1>
@stop

@section('content')
    <div class="container py-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.pedidos.update', $pedido->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="form-group">
                        <label for="cliente_numero_documento">Número de Documento del Cliente</label>
                        <input type="text" class="form-control" id="cliente_numero_documento" name="cliente_numero_documento" value="{{ $pedido->cliente_numero_documento }}" required>
                    </div>
            
                    <div class="form-group">
                        <label for="producto_id">Producto</label>
                        <select class="form-control" id="producto_id" name="producto_id" required>
                            <option value="">Seleccione un producto</option>
                            @foreach($productos as $producto)
                                <option value="{{ $producto->id }}" {{ $producto->id == $pedido->producto_id ? 'selected' : '' }}>
                                    {{ $producto->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $pedido->fecha }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $pedido->cantidad }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $pedido->precio }}" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Actualizar Pedido</button>
                </div>
            </div>
        </form>
    </div>
@stop