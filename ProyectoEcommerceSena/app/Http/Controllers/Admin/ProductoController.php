<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\producto;
use App\Models\Admin\categoria;
use App\Models\Admin\proveedore;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = producto::all();
        

        return view('admin.products.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores =proveedore::all();
        $categorias= categoria::all();
        return view('admin.products.create',compact('categorias','proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
       // dd($request);
            //Valida los datos del formulario
            $validarDatos = $request->validate([
                'nombre' => 'required',
                'descripcion' => 'required',
                'precio' => 'required|numeric',
                'existencias' => 'required|integer',
                'imagen' => 'required',
                'categoria' => 'required',
                'proveedor' => 'required',
            ]);

          
        
            // Crea un nuevo objeto Producto con los datos validados
            $producto = new Producto();
            $producto->nombre = $validarDatos['nombre'];
            $producto->descripcion = $validarDatos['descripcion'];
            $producto->precio = $validarDatos['precio'];
            $producto->existencias = $validarDatos['existencias'];
            $producto->imagen = $validarDatos['imagen'];
            $producto->categorias_id = $validarDatos['categoria'];
            $producto->proveedores_id = $validarDatos['proveedor'];
        
            // Guarda el objeto Producto en la base de datos
            $producto->save();
        
            // Redirige a la vista de detalles del producto o a donde desees
            return redirect()->route('products.index');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('products.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proveedores = proveedore::all();
        $categorias= categoria::all();
        $producto = Producto::findOrFail($id);
        // dd($categorias  );
        return view('admin.products.edit', compact('producto','categorias','proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validar datos del formulario, se hace nuevamente para no permitir
        //que el usuario deje campos sin rellenar 

        $validarDatos = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer',
            'imagen' => 'required',
            'categoria' => 'required',
            'proveedor' => 'required',
        ]);

        //inserta los datos actualizados  en la tabla productos 
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request['nombre'];
        $producto->descripcion = $request['descripcion'];
        $producto->precio=$request['precio'];
        $producto->existencias = $request ['existencias'];
        $producto->categorias_id = $request['categoria'];
        $producto->proveedor_id = $request['proveedor'];
        $producto->update();

        // $producto = Producto::findOrFail($id);
        // $producto->update([
        //     'nombre' => $request->nombre,
        //     'descripcion' => $request->descripcion,
        //     'precio' => $request->precio,
        //     'existencias' => $request->existencias,
        //     'categorias_id' => $request->categoria,
        //     'proveedor_id' => $request->proveedor
        // ]);
        
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        
        $producto->delete();
        return redirect()->route('products.index');
    }
}

