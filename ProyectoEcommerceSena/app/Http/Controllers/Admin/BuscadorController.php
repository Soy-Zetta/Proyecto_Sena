<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\producto;
use App\Models\Admin\proveedore;

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



    
}
