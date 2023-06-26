<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Con paginación
        $usuarios = User::paginate(10);
        $roles = Role::all();
        return view('admin.users.index', compact('usuarios', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:120',
            'apellido' => 'required|max:120',
            'rol' => 'required',
            'tipo_documento' => 'required',
            'num_documento' => 'required',
            'lugar_nacimiento' => 'required',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required',
            'ciudad_residencia' => 'required',
            'direccion' => 'required',
            'email' => 'required|email|unique:users|max:30',
            'password' => 'required',
        ]);
        $roles = new Role();
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->apellido = $request->input('apellido');
        $roles->name = $request->input('rol');
        $usuario->tipo_documento = $request->input('tipo_documento');
        $usuario->num_documento = $request->input('num_documento');
        $usuario->lugar_nacimiento = $request->input('lugar_nacimiento');
        $usuario->fecha_nacimiento = $request->input('fecha_nacimiento');
        $usuario->telefono = $request->input('telefono');
        $usuario->ciudad_residencia = $request->input('ciudad_residencia');
        $usuario->direccion = $request->input('direccion');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request['password']);
        $usuario->save();

        return redirect()->route('admin.users.index')->with('success', 'Usuario creado con éxito');
        // return redirect()->route('admin.users.index');
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
    public function edit($id)
    {
        $roles = Role::all();
        $usuario = User::findOrFail($id);
        return view('admin.users.edit',compact('usuario', 'roles'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
    
        $request->validate([
            'name' => 'required|max:120',
            'apellido' => 'required|max:120',
            'tipo_documento' => 'required',
            'num_documento' => 'required',
            'lugar_nacimiento' => 'required',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required',
            'ciudad_residencia' => 'required',
            'direccion' => 'required',
            'email' => 'required|max:30|unique:users,email,' . $id,
            'password' => 'required',
        ]);
    
        $usuario->fill($request->all());
        $usuario->password = bcrypt($request->input('password'));
        $usuario->save();
    
        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado con éxito');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuarios = User::find($id);
        $usuarios ->delete();

        return redirect('admin/users');
    }
    /**
     * Imagen de perfil de usuarios.
     */


}
