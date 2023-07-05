{{-- @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">compras</h1>
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

 
<a href="{{route('compras.create')}}" class="btn btn-outline-info">Registrar</a>
<br><br>

    

<form action="{{ route('buscador.searchCategories') }}" method="GET">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="buscador" placeholder="Buscar por Código de producto" required>
        <button type="submit" class="btn btn-outline-dark">Buscar</button>
    </div>
</form>

    <form action="{{ route('compras.store') }}">

    </form>

    <div>
        <table class="table table-striped table-dark mt-5">
            <thead>
                <tr>
                    <th>ID</th>                  
                    <th>Proveedor</th> 
                    fecha,cantidad,estado
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compras as $compra)
                    <tr>
                        
                        <td>{{$compra->id}}</td>
                        <td>{{$compra->proveedor}}</td>
                        <td>{{$compra->productos_id}}</td>
                        <td>{{$compra->cantidad}}</td>
                        <td><a href="{{ route('compras.edit', $compra->id) }}"class="btn btn-primary">editar</a></td>
                        <td>
                            <form action="{{ route('compras.destroy', $compra->id) }}" method="POST">
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

@stop --}}


@extends('adminlte::page')

@section('title', 'Lista de Compras')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Compras</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif




<div class="card">
    <div class="card-header">
        <h3 class="card-title">Compras Registradas</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>                
                    <th>TOTAL</th>
                    <th>FECHA</th>
                    <th>ESTADO</th>
                    <th style="width:280px; ">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($compras as $compra)
                <tr>
                    <th scope="row">
                        {{ $compra->id}}           
                    </th>

                    {{-- <td>{{ $compra->proveedor->nombre }}</td> --}}
                    {{-- <td>{{ $compra->producto->descripcion}}</td> --}}
                    <td>{{ $compra->total }}</td>
                    <td>{{ $compra->fecha }}</td>
                    <td>{{ $compra->estado }}</td>
                   
                    <td style="width: 280px;">
                        <a href="{{ route('compras.show', $compra->id) }}" class="btn btn-outline-info">Ver</a>
                        
                        <a class="jsfrid-button btn-btn-info jsgrid-edit-button" href="{
                        {route('compras.edit', $compras)}}"title="editar"><i class="fas fa-edit" style="font-size: 28px;"></i></a>
                       
                        <a href="#" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-print"></i></a>
                        
                        <form action="{{ route('compras.destroy', $compra->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="summit" class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de eliminar esta compra?')" title="Eliminar">
                                <i class="fas fa-trash-alt" style="font-size: 12spx;"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<a href="{{ route('compras.create') }}" class="btn btn-outline-primary">Crear Compra</a>

@endsection







