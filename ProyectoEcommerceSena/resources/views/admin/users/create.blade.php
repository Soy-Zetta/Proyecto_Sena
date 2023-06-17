@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Usuario</h1>
@stop

@section('content')

    <main>

        <div class="container py-4">

            <h2>Registrar</h2>



            {{-- para generar un error de validacion --}}

            {{-- @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach   
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}

            <form action="{{ route('admin.users.store') }}" method="POST">

                @csrf

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="apellido" id="apellido"
                            value="{{ old('apellido') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tipo_documento" class="col-sm-2 col-form-label">Tipo de Documento de Identificación</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="tipo_documento" id="tipo_documento"
                            value="{{ old('tipo_documento') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="num_documento" class="col-sm-2 col-form-label">Numero de Identificación</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="num_documento" id="num_documento"
                            value="{{ old('num_documento') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="lugar_nacimiento" class="col-sm-2 col-form-label">Lugar de Nacimiento</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="lugar_nacimiento" id="lugar_nacimiento"
                            value="{{ old('lugar_nacimiento') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                            value="{{ old('fecha_nacimiento') }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="telefono" id="telefono"
                            value="{{ old('telefono') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ciudad_residencia" class="col-sm-2 col-form-label">Ciudad de Residencia :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="ciudad_residencia" id="ciudad_residencia"
                            value="{{ old('ciudad_residencia') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="direccion" id="direccion"
                            value="{{ old('direccion') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" id="password"
                            value="{{ old('password') }}" required>
                    </div>
                </div>

                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Regresar</a>

                <button type="submit" class="btn btn-primary">Guardar</button>



            </form>
    </main>
@endsection
