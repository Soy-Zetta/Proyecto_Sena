@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">cliente {{$cliente->nombre}}</h1>
@stop

@section('content')
   <form action="{{route('customers.update',$cliente->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
            <div class="col-md-6 mx-auto">
        
              <div class="mb-3">
                      <label for="nombre" class="form-label">nombre</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" value="{{$cliente->nombre}}"required>
                  </div>
            
                  <div class="mb-3">
                      <label for="correo" class="form-label">correo</label>
                      <input type="text" class="form-control" name="correo" id="correo" value="{{$cliente->correo}}"required>
                  </div>
                  <div class="mb-3">
                    <label for="contraseña" class="form-label">contraseña</label>
                    <input type="text" class="form-control" name="contraseña" id="contraseña" value="{{$cliente->contraseña}}"required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="{{$cliente->telefono}}"required>
                </div>
                <div class="mb-3">
                    <label for="tipo_documento" class="form-label">tipo documento</label>
                    <input type="text" class="form-control" name="tipo_documento" id="tipo_documento" value="{{$cliente->tipo_documento}}"required>
                </div>
                <div class="mb-3">
                    <label for="numero_documento" class="form-label">numero documento</label>
                    <input type="text" class="form-control" name="numero_documento" id="numero_documento" value="{{$cliente->numero_documento}}"required>
                </div>
                
            
                  <div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
                
      
            </div>
    
        <div>
    </form>
@stop