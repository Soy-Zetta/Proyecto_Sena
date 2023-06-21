@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Regresar</a>
    </div>
@stop
