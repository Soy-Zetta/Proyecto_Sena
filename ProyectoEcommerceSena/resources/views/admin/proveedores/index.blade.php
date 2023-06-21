@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">proveedor</h1>
@stop

@section('content')
 
<a href="{{route('proveedores.create')}}" class="btn btn-primary">CREAR PROVEEDORES</a>
<br><br>

<form action="{{ route('buscador.searchproveedor') }}" method="GET">
    <fieldset enable>
        @csrf
        <input name ="buscador" type="text" id="disabledTextInput" class="form-control" placeholder="Buscar por id de proveedor">
      </div>
      <div class="mb-3">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </fieldset>
  </form>

<form action="{{route('proveedores.store')}}">

</form>

<div>
    <table class="table table-striped table-dark mt-5">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>Tipo Documento</th>
             
                
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    
                    <td>{{$proveedor->id}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->tipo_documento}}</td>
                    <td><a href="{{route('proveedores.edit',$proveedor->id)}}"class="btn btn-primary" >editar</a></td>
                    <td>
                        <form action="{{route('proveedores.destroy',$proveedor->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
  



@stop

@section('css')
   
@stop
