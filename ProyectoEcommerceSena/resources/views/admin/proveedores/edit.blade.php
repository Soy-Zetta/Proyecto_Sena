@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">proveedor {{$proveedor->nombre}}</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @push('scripts')
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $('#success-alert').fadeOut('slow', function() {
                        $(this).remove();
                    });
                }, 5000);
            });
        </script>
    @endpush



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
                    <label for="numero_documento" class="form-label">Numero Documento</label>
                    <input type="text" class="form-control" name="numero_documento" id="numero_documento"
                    value="{{ $proveedor->numero_documento}}" required>
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
                    <input type="text" class="form-control" name="correo" id="correo"
                    value="{{ $proveedor->correo}}" required>
                  </div>

                 
            
                  <div>
                    <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Regresar</a>

                      <button type="submit" class="btn btn-dark">Guardar</button>
              </div>
                
      
            </div>
    
        <div>
    </form>
@stop