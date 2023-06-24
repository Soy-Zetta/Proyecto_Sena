@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">proveedor {{$proveedor->nombre}}</h1>
@stop

@section('content')
   <form action="{{route('proveedores.update',$proveedor->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
            <div class="col-md-6 mx-auto">
        
                <div class="mb-3">
                    <label for="nombre" class="form-label">nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"
                    value="{{ $proveedor->nombre }}" required>
                  </div>

                  <div class="mb-3">
                    <label for="tipo_documento" class="form-label">Tipo Documento</label>
                    <input type="text" class="form-control" name="tipo_documento" id="tipo_documento"
                    value="{{ $proveedor->tipo_documento}}" required>
                  </div>

                  <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion"
                    value="{{ $proveedor->direccion}}"required>
                  </div>

                  <div class="mb-3">
                    <label for="telefono" class="form-label">telefono</label>
                    <input type="text" class="form-control" name="telefono"id="telefono"
                    value="{{ $proveedor->telefono}}" required>
                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="Correo" id="Correo"
                    value="{{ $proveedor->correo}}" required>
                  </div>
            
                  <div>
                      <button type="submit" class="btn btn-dark">Guardar</button>
              </div>
                
      
            </div>
    
        <div>
    </form>
@stop