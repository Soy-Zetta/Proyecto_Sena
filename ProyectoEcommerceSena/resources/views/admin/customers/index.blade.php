@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Clientes</h1>
@stop

@section('content')
 


<form action="{{ route('buscador.searchclientes') }}" method="GET">
    <fieldset enable>
        @csrf
        <input name ="buscador" type="text" id="disabledTextInput" class="form-control" placeholder="Buscar por numero_documento de cliente">
      </div>
      <div class="mb-3">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </fieldset>
  </form>

<form action="{{route('customers.store')}}">

</form>

<div>
    <table class="table table-striped table-dark mt-5">
        <thead>
            <tr>
                <th>C.C</th>
                <th>nombre</th>
                <th>Correo</th>
             
                
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    
                    <td>{{$cliente->numero_documento}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->email}}</td>
                    <td><a href="{{route('customers.edit',$cliente->numero_documento)}}"class="btn btn-primary" >editar</a></td>
                    <td>
                        <form action="{{route('customers.destroy',$cliente->id)}}" method="POST">
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
