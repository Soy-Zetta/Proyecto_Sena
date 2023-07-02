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
        <input type="text" class="form-control" name="nombre" id="nombre"
        value="{{ old('nombre') }}" required>
      </div>
      
      <div class="mb-3">
        <label for="tipo_documento" class="form-label">Tipo Documento</label>
        <select class="form-control" name="tipo_documento" id="tipo_documento" required>
          <option value="NIT" {{ old('tipo_documento') === 'nit' ? 'selected' : '' }}>NIT</option>
          <option value="RUT" {{ old('tipo_documento') === 'rut' ? 'selected' : '' }}>RUT</option>
          <option value="C.C" {{ old('tipo_documento') === 'cc' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="numero_documento" class="form-label"> numero de documento</label>
        <input type="number" class="form-control" name="numero_documento" id="numero_documento"
        value="{{ old('numero_documento') }}" required>
      </div>
      <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion"
        value="{{ old('direccion') }}" required>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono"id="telefono"
        value="{{ old('telefono') }}" required>
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo" id="correo"
        value="{{ old('correo') }}" required>
      </div>
       
      {{-- <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Regresar</a> --}}
   
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
  </div>
</form>
@endsection
