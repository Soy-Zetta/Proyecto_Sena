<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Con paginación
        $usuarios = User::paginate(10);
        return view('admin.users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validarDatos = $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'tipo_documento' => 'required',
            'num_documento' => 'required',
            'lugar_nacimiento' => 'required',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'ciudad_residencia' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usuario = new User();
        $usuario->name = $validarDatos['name'];
        $usuario->apellido = $validarDatos['apellido'];
        $usuario->tipo_documento = $validarDatos['tipo_documento'];
        $usuario->numero_documento = $validarDatos['numero_documento'];
        $usuario->lugar_nacimiento = $validarDatos['lugar_nacimiento'];
        $usuario->fecha_nacimiento = $validarDatos['fecha_nacimiento'];
        $usuario->telefono = $validarDatos['telefono'];
        $usuario->ciudad_residencia = $validarDatos['ciudad_residencia'];
        $usuario->direccion = $validarDatos['direccion'];
        $usuario->email = $validarDatos['email'];
        $usuario->password = bcrypt($validarDatos['password']);
        $usuario->save();

        return redirect()->route('admin.users.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * Imagen de perfil de usuarios.
     */


}
