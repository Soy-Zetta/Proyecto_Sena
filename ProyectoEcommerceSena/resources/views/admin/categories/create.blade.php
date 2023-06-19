@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">categorias</h1>
@stop

@section('content')
   <form action="{{route('categories.store')}}" method="POST">
      @csrf
      <div class="row">
            <div class="col-md-6 mx-auto">
        
              <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="nombre" id="nombre"
                       value="{{ old('nombre') }}" required>
                  </div>
            
                  <div class="mb-3">
                      <label for="descripcion" class="form-label">Descripción</label>
                      <input type="text" class="form-control" name="descripcion" id="descripcion" 
                      value="{{ old('descripcion') }}" required>
                  </div>
            
                  <div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                      
              </div>
            </div>
    
        <div>
    </form>
@stop


