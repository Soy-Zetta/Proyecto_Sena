<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\producto;
<<<<<<< HEAD
use App\Models\Admin\categoria;
=======
use App\Models\Admin\proveedore;
>>>>>>> 2e963af2db8cf5c4de9f178eb2d0ae6cefe150e4

class BuscadorController extends Controller
{
    public function searchproveedor(Request $request)

    {
        
        $buscador = $request->input('buscador');
        $proveedores = proveedore::where('id', 'LIKE', "%$buscador%")->orWhere('nombre', 'LIKE', "%$buscador%")->orWhere('tipo_documento', 'LIKE', "%$buscador%") ->get();
        return view('admin.proveedores.index', compact('proveedores'));
    }

    
    public function search(Request $request)

    {
        
        $buscador = $request->input('buscador');
        $productos = producto::where('nombre', 'LIKE', "%$buscador%")
                            ->orWhere('precio', 'LIKE', "%$buscador%")
                            ->get();
        return view('admin.products.index', compact('productos'));
    }

<<<<<<< HEAD
    public function searchCategories(Request $request)
    {
         
        $buscadorcategorias = $request->input('buscador');
        $categorias = categoria::where('nombre', 'LIKE', "%$buscadorcategorias%")
                            ->orWhere('descripcion', 'LIKE', "%$buscadorcategorias%")
                            ->get();
        return view('admin.categories.index', compact('categorias'));
    } 
=======


>>>>>>> 2e963af2db8cf5c4de9f178eb2d0ae6cefe150e4
    
}
