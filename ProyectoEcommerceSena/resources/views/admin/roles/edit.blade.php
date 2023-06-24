
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Rol {{$role->nombre}}</h1>
@stop

@section('content')

    <main>
        <div class="container py-4">
            <h2>Editar Roles</h2>


            <form action="{{ route('admin.roles.update', ['role' => $roles->id]) }}" method="POST">
                @method("PUT")

                @csrf

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $usuario->name }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="apellido" id="apellido"
                            value="{{ $usuario->apellido }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Rol</label>
                    <div class="col-sm-5">
                        @foreach ($usuario->roles as $role)
                            <input type="text" value="{{ $role->name }}" class="form-control">
                        @endforeach
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="tipo_documento" class="col-sm-2 col-form-label">Tipo de Documento de Identificación</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="tipo_documento" id="tipo_documento"
                            value="{{ $usuario->tipo_documento }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="num_documento" class="col-sm-2 col-form-label">Numero de Identificación</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="num_documento" id="num_documento"
                            value="{{ $usuario->num_documento }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="lugar_nacimiento" class="col-sm-2 col-form-label">Lugar de Nacimiento</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="lugar_nacimiento" id="lugar_nacimiento"
                            value="{{ $usuario->lugar_nacimiento }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                            value="{{$usuario->fecha_nacimiento }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="telefono" id="telefono"
                            value="{{ $usuario->telefono }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ciudad_residencia" class="col-sm-2 col-form-label">Ciudad de Residencia :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="ciudad_residencia" id="ciudad_residencia"
                            value="{{ $usuario->ciudad_residencia }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="direccion" id="direccion"
                            value="{{ $usuario->direccion }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{ $usuario->email }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" id="password"
                            value="{{ $usuario->password }}" required>
                    </div>
                </div>

                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Regresar</a>

                <button type="submit" class="btn btn-primary">Guardar</button>



            </form>
    </main>
@endsection
