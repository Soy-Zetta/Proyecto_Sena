{{-- @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



<form action="{{route('compras.store')}}" method="POST" class="card">
  @csrf
  <div class="row">
    <div class="col-md-6 mx-auto">
        
        <div class="form-group">
            <label for="proveedor">Proveedor</label>
            <select name="proveedor" id="proveedor" class="form-control">
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}"required>{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="productos_id">Producto</label>
            <select name="productos_id" id="productos_id" class="form-control" required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->descripcion }}</option>
                @endforeach
            </select>
        </div>

      -

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <select name="cantidad" id="cantidad" class="form-control">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id}}"required>{{ $producto->existencias}}</option>
                @endforeach
            </select>
            
        </div>
        
        <div class="form-group">
            <label for="precio">Precio</label>
            <select name="precio" id="precio" class="form-control">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id}}"required>{{ $producto->precio}}</option>
                @endforeach
            </select>
            
        </div>
        
      

          

     
   
    <div>
      <button type="submit" class="btn 
      btn-info">Guardar</button>
    </div>
    </div>
    </div>
  </div>
</form>
@endsection --}}

@extends('adminlte::page')

@section('title', 'Registrar Compra')

@section('content_header')
    <h1>Registrar Compra</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('compras.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="proveedor">Proveedor</label>
                    <select name="proveedor[]" id="proveedor" class="form-control" required>
                        <option value="">Seleccione un proveedor</option>
                        @foreach($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="productos_id">Producto</label>
                    <select name="productos_id" id="productos_id" class="form-control"  required>
                        @foreach($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->descripcion }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad[]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio[]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion[]" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
