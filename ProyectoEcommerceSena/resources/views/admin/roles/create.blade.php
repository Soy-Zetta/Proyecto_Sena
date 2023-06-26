@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Crear Nuevo Rol</h1>
@stop

@section('content')


<a href="{{ route('admin.roles.index') }}" class="btn btn-warning">Regresar</a>
    <main>

        <div class="container py-4">

            <form action="{{ route('admin.roles.store') }}" method="POST">

                @csrf

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre del Rol</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Ingrese el nombre del Rol" value="{{ old('name') }}" required>
                    </div>
                    @error('name')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>

                <h2 class="h3">Lista de Permisos</h2>

                @foreach ($permissions as $permission)
                    <div>
                        <label>
                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="mr-1">
                                {{ $permission->description }}
                        </label>
                    </div>

                @endforeach


                <button type="submit" class="btn btn-primary">Guardar</button>
                

                



            </form>
    </main>
@endsection
