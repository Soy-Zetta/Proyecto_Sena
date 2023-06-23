<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\producto;
use App\Models\Admin\categoria;
use App\Models\Admin\proveedore;
use Illuminate\Support\Facades\Storage;

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
          //  dd($request);
            //Valida los datos del formulario
            $validarDatos = $request->validate([
                'nombre' => 'required',
                'descripcion' => 'required',
                'codigo'=>   'required',
                'precio' => 'required|numeric',
                'existencias' => 'required|integer',
                'imagen' => 'required|image',
                'disponible'=>'required',
                'categoria' => 'required',
                'proveedor' => 'required',
            ]);

           // dd($validarDatos);
        // Obtener el archivo de imagen
           if ($request->hasFile('imagen')) {
             $imagen=$request->file("imagen");
             $nombreArchivo = uniqid().'.'.$imagen->getClientOriginalExtension();
             $imagen->move(public_path('images'), $nombreArchivo);
             // También puedes usar el siguiente código en lugar de move():
        // $imagen->storeAs('public/images', $nombreArchivo);
        
        $validarDatos['imagen'] = $nombreArchivo;
    
           } 
                
         
          
        
            // Crea un nuevo objeto Producto con los datos validados
            $producto = new Producto();
            $producto->nombre = $validarDatos['nombre'];
            $producto->descripcion = $validarDatos['descripcion'];
            $producto->codigo = $validarDatos['codigo'];
            $producto->precio = $validarDatos['precio'];
            $producto->existencias = $validarDatos['existencias'];
           // $producto->imagen = $fileName; // Guarda el nombre del archivo en lugar del objeto UploadedFile
            $producto->imagen = $validarDatos['imagen'];
            $producto->disponible = $validarDatos['disponible'];
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
        $producto->proveedores_id = $request['proveedor'];
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
            // Obtén el nombre del archivo de imagen del producto
        $nombreImagen = $producto->imagen;
        //dd($nombreImagen);
         // Elimina el registro del producto de la base de datos
        $producto->delete();

         // Verifica si el archivo de imagen existe y elimínalo
        if ($nombreImagen && file_exists(public_path('images/' . $nombreImagen))) {
            unlink(public_path('images/' . $nombreImagen));
        }
            return redirect()->route('products.index');
        }
}

