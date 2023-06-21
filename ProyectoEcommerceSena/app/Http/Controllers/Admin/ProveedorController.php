<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
<<<<<<< HEAD
                'tipo_documento' => 'required',
                'direccion' => 'required',
=======
                'Tipo_Documento' => 'required',
                'numero_documento'=>'required',
                'Direccion' => 'required',
>>>>>>> d907fd22c10b8749ea56a4b79a815b2f7b105772
                'telefono' => 'required',
                'correo' => 'required',
                
            ]);
          //  dd($validarDatos);
           
            
            // Muestra los datos validados
            
          
         
        
            // Crea un nuevo objeto Producto con los datos validados
            $proveedor = new proveedore();
            $proveedor->nombre = $validarDatos['nombre'];
<<<<<<< HEAD
            $proveedor->tipo_documento = $validarDatos['tipo_documento'];
            $proveedor->direccion = $validarDatos['direccion'];
=======
            $proveedor->tipo_documento = $validarDatos['Tipo_Documento'];
            $proveedor->numero_documento = $validarDatos['numero_documento'];
            $proveedor->direccion = $validarDatos['Direccion'];
>>>>>>> d907fd22c10b8749ea56a4b79a815b2f7b105772
            $proveedor->telefono = $validarDatos['telefono'];
            $proveedor->correo = $validarDatos['correo'];
        
            // Guarda el objeto Producto en la base de datos
            $proveedor->save();
        
            
            // Redirige a la vista de detalles del producto o a donde desees
           return redirect()->route('proveedores.index');
    }

   
    public function show(string $id)
    {
        $proveedor = proveedore::findOrFail($id);
        return view('proveedores.show',compact('proveedor'));
    }

    
    public function edit(string $id)
    {
        $proveedor = proveedore::findOrFail($id);
        // dd($cegoriasat  );
        return view('admin.proveedores.edit',compact('proveedor'));
    }

  
    public function update(Request $request, string $id)
    {
       

        $validarDatos = $request->validate([
            'nombre' => 'required',
            'tipo_documento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',

        ]);
        $proveedor=proveedore::findOrFail($id);
        $proveedor->nombre= $validarDatos['nombre'];
        $proveedor->tipo_documento= $validarDatos['tipo_documento'];
        $proveedor->direccion = $validarDatos['direccion'];
        $proveedor->telefono = $validarDatos['telefono'];
        $proveedor->correo = $validarDatos['correo'];
        $proveedor->update();
        
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proveedor = proveedore::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedores.index');
    }
}
