@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Crear Proveedor</h1>
@stop

@section('content')
<form action="{{route('proveedores.store')}}" method="POST" class="card">
  @csrf
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="mb-3">
        <label for="nombre" class="form-label">nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
      </div>
      <div class="mb-3">
        <label for="descripcion" class="form-label">Tipo_Documento</label>
        <input type="text" class="form-control" name="Tipo_Documento" id="Tipo_Documento">
      </div>
      <div class="mb-3">
        <label for="precio" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="Direccion" id="Direccion">
      </div>
      <div class="mb-3">
        <label for="existencias" class="form-label">telefono</label>
        <input type="text" class="form-control" name="telefono"id="telefono">
      </div>
      <div class="mb-3">
        <label for="imagen" class="form-label">Correo</label>
        <input type="text" class="form-control" name="Correo" id="Correo">
      </div>
       
   
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
  </div>
</form>
@endsection
