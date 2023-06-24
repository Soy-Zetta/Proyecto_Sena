@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Editar producto: {{$producto->nombre}}</h1>
@stop

@section('content')
<form action="{{ route('products.update',$producto->id) }}" method="POST" class="card" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-md-6 mx-auto">
       <div class="mb-3">
         <label for="nombre" class="form-label">Nombre</label>
         <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $producto->nombre }}">
       </div>
     <div class="mb-3">
         <label for="descripcion" class="form-label">Descripción</label>
         <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}">
     </div>
      <div class="mb-3">
         <label for="precio" class="form-label">Precio</label>
         <input type="text" class="form-control" name="precio" id="precio" value="{{ $producto->precio }}">
      </div>
      <div class="mb-3">
         <label for="existencias" class="form-label">Existencias</label>
         <input type="text" class="form-control" name="existencias" id="existencias" value="{{ $producto->existencias }}">
      </div>
      
      <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="imagen" id="imagen" 
        >
      </div>

      {{-- <div class="form-group">
        <label for="disponible">Disponibilidad:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="disponible" name="disponible" value="1" {{ $producto->disponible ? 'checked' : '' }}>
            <label class="form-check-label" for="disponible">Disponible</label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" id="no_disponible" name="disponible" value="0" {{ !$producto->disponible ? 'checked' : '' }}>
            <label class="form-check-label" for="no_disponible">No Disponible</label>
        </div>
    </div> --}}

    <div class="form-group">
      <label for="disponible">Disponibilidad:</label>
      <select name="disponible" id="disponible" class="form-control">
          <option value="1" >Disponible</option>
          <option value="0" >No disponible</option>
      </select>
  </div>


      <div class="form-group">
          <label for="categoria">Categoría</label>
          <select name="categoria" id="categoria" class="form-control">
              @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}"required>{{ $categoria->nombre }}</option>
              @endforeach
          </select>
      
       <div class="form-group">
        <label for="proveedor">Proveedor</label>
        <select name="proveedor" id="proveedor" class="form-control">
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}"required>{{ $proveedor->nombre }}</option>
            @endforeach
        </select>
    </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
 </div>
</form>
@endsection

