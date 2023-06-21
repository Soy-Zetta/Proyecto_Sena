<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\producto;
use App\Models\Admin\categoria;

class BuscadorController extends Controller
{
    
    public function search(Request $request)

    {
        
        $buscador = $request->input('buscador');
        $productos = producto::where('nombre', 'LIKE', "%$buscador%")
                            ->orWhere('precio', 'LIKE', "%$buscador%")
                            ->get();
        return view('admin.products.index', compact('productos'));
    }

    public function searchCategories(Request $request)
    {
         
        $buscadorcategorias = $request->input('buscador');
        $categorias = categoria::where('nombre', 'LIKE', "%$buscadorcategorias%")
                            ->orWhere('descripcion', 'LIKE', "%$buscadorcategorias%")
                            ->get();
        return view('admin.categories.index', compact('categorias'));
    } 
    
}
