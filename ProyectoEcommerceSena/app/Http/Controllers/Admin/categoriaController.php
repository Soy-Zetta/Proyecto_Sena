<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\categoria;


class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Con Paginación
        $categorias = categoria::paginate(10);
        return view('admin.categories.index',compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categorias = categoria::all();
       return view('admin.categories.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        
        $validarDatos = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
       // dd($validarDatos);

        $categoria = new categoria();
        $categoria->nombre = $validarDatos['nombre'];
        $categoria->descripcion = $validarDatos['descripcion'];
        $categoria->save();

       return redirect()->route('categories.index');
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
        $categoria =categoria::findorfail($id);
        return view('admin.categories.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       

        $validarDatos = $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
        ]);
        $categoria=categoria::findOrFail($id);
        $categoria->nombre= $validarDatos['nombre'];
        $categoria->descripcion= $validarDatos['descripcion'];
        $categoria->update();
        
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->productos()->delete();
        $categoria->delete();

        return redirect()->route('categories.index');
    }
}
