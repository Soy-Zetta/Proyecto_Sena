<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\categoria;
use App\Models\Admin\producto;
use Illuminate\Http\Request;
use App\Models\Admin\proveedore;
class ProveedorController extends Controller
{
    
    public function index()
    {
        $proveedores=proveedore::all();
        return view('admin.proveedores.index',compact('proveedores'));
    }

   
    public function create()
    {
        $proveedores =proveedore::all();
        return view('admin.proveedores.create',compact('proveedores'));
    }

    
    public function store(Request $request)
    {
        
       
            //Valida los datos del formulario
            $validarDatos = $request->validate([
                'nombre' => 'required',
                'Tipo_Documento' => 'required',
                'Direccion' => 'required',
                'telefono' => 'required',
                'Correo' => 'required',
                
            ]);
          //  dd($validarDatos);
           
            
            // Muestra los datos validados
            
          
         
        
            // Crea un nuevo objeto Producto con los datos validados
            $proveedor = new proveedore();
            $proveedor->nombre = $validarDatos['nombre'];
            $proveedor->tipo_documento = $validarDatos['Tipo_Documento'];
            $proveedor->direccion = $validarDatos['Direccion'];
            $proveedor->telefono = $validarDatos['telefono'];
            $proveedor->correo = $validarDatos['Correo'];
        
            // Guarda el objeto Producto en la base de datos
            $proveedor->save();
        
            
            // Redirige a la vista de detalles del producto o a donde desees
           return redirect()->route('proveedores.index');
    }

   
    public function show(string $id)
    {
        $proveedor = proveedore::findOrFail($id);
        return view('proveedores.show', compact('proveedores'));
    }

    
    public function edit(string $id)
    {
        $proveedor = proveedore::all();
        $categorias= categoria::all();
        $producto = producto::findOrFail($id);
        // dd($categorias  );
        return view('admin.proveedores.edit', compact('producto','categorias','proveedores'));
    }

  
    public function update(Request $request, string $id)
    {
        $validarDatos = $request->validate([
            'nombre' => 'required',
            'Tipo_Documento' => 'required|numeric',
            'Direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'proveedor' => 'required',
        ]);

        //inserta los datos actualizados  en la tabla proveedores 
        $proveedor = proveedore::findOrFail($id);
        $proveedor->nombre = $request['nombre'];
        $proveedor->descripcion = $request['descripcion'];
        $proveedor->precio=$request['precio'];
        $proveedor->existencias = $request ['existencias'];
        $proveedor->proveedores_id = $request['proveedores'];
        $proveedor->update();
    }

  
    public function destroy(string $id)
    {
        {
            $proveedor = proveedore::findOrFail($id);
            
            $proveedor->delete();
            return redirect()->route('proveedores.index');
        }
    }
}
