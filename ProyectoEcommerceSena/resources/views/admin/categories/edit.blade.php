@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">categorias {{$categoria->nombre}}</h1>
@stop

@section('content')
   <form action="{{route('categories.update',$categoria->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
            <div class="col-md-6 mx-auto">
        
              <div class="mb-3">
                      <label for="nombre" class="form-label">nombre</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" value="{{$categoria->nombre}}"required>
                  </div>
            
                  <div class="mb-3">
                      <label for="descripcion" class="form-label">descripcion</label>
                      <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$categoria->descripcion}}"required>
                  </div>
            
                  <div>

                    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">Regresar</a>
                    
                      <button type="submit" class="btn btn-outline-primary">Guardar</button>
              </div>
                
      
            </div>
    
        <div>
    </form>
@stop