@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Crear Productos</h1>
@stop

@section('content')

<div class="row">
    <x-adminlte-input name="name" label="Nombre" placeholder="Ingrese el Nombre del Producto"
        fgroup-class="col-md-6"/>
</div>
<div class="row">
    {{-- Disabled --}}
<x-adminlte-textarea name="taDisabled" disabled>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis nibh massa.
</x-adminlte-textarea>
</div>

@stop


