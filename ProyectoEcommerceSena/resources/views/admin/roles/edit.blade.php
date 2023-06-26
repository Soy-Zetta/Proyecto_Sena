@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Rol {{ $role->nombre }}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class='alert alert-success'>
            {{ session('info') }}
        </div>
    @endif
    <a href="{{ route('admin.roles.index') }}" class="btn btn-warning">Regresar</a>
    <main>
        <div class="container py-4">
            <h2>Editar Roles</h2>

            <form action="{{ route('admin.roles.update', ['role' => $role->id]) }}" method="POST">
                @method("PUT")
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre del Rol</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}"
                            required>
                    </div>
                    @error('name')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <h2 class="h3">Lista de Permisos</h2>

                @foreach ($permissions as $permission)
                    <div>
                        <label>
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="mr-1"
                                {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>
                            {{ $permission->description }}
                        </label>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary">Actualizar Rol</button>



            </form>
    </main>
@endsection
