@extends('adminlte::page')

@section('title', 'AdminLTE')

@section ('Sweetalert2')
@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Este Contenido es publico</p>
                    @role('Admin')
                    <p class="mb-0">Este Contenido es solo Administrador</p>
                    @endrole
                    @role('Empleado')
                    <p class="mb-0">Este Contenido es solo Empleado</p>
                    @endrole
                </div>
            </div>
        </div>
    </div>
@stop

@section ('js')
<script>
    Swal.fire(
'Bienvenido',
'',
'success')
</script>
@stop