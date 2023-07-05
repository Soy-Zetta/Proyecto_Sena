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
    

    public function index()
    {
        $productos = producto::all();
        
            
        return view('admin.products.index',compact('productos'));
    }

    



    public function create()
    {
        $proveedores =proveedore::all();
        $categorias= categoria::all();

        
        return view('admin.products.create',compact('categorias','proveedores'));
    }

   



    
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
            return redirect()->route('products.index')->with('success','producto creado exitosamente');
        
        
    }

    






    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('products.show', compact('producto'));
    }

 




    public function edit(string $id)
    {
        $proveedores = proveedore::all();
        $categorias= categoria::all();
        $producto = Producto::findOrFail($id);
        $imagenActual = $producto->imagen;
        // dd($categorias  );
        return view('admin.products.edit', compact('producto','categorias','proveedores','imagenActual'));
    }

    



    public function update(Request $request, string $id)
    {


  
        // validar datos del formulario, se hace nuevamente para no permitir
        // que el usuario deje campos sin rellenar 

        $validarDatos = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer',
            'imagen' => 'sometines',
            'disponible' => 'required',
            'categoria' => 'required',
            'proveedor' => 'required',
        ]);
    
        $producto = Producto::findOrFail($id);
    
        $nombreImagenAnterior = $producto->imagen; // Paso 1: Obtén el nombre de la imagen anterior
    
        $producto->nombre = $validarDatos['nombre'];
        $producto->descripcion = $validarDatos['descripcion'];
        $producto->precio = $validarDatos['precio'];
        $producto->existencias = $validarDatos['existencias'];

        if ($request->hasFile('imagen')) {
            $imagen = $request->file("imagen");
             // Paso 2: Verifica si el archivo de imagen nueva se ha cargado correctamente
            if ($imagen->isValid()) {
                $nombreArchivo = uniqid().'.'.$imagen->getClientOriginalExtension();
                $imagen->move(public_path('images'), $nombreArchivo);
                // Actualiza el nombre de la imagen en los datos validados
                //$validarDatos['imagen'] = $nombreArchivo;  que no deja guardar la imagen si no se edita
                $producto->imagen =$nombreArchivo;
            }
        }
    
        $producto->disponible = $validarDatos['disponible'] == '1';
        $producto->categorias_id = $validarDatos['categoria'];
        $producto->proveedores_id = $validarDatos['proveedor'];
       // $producto->update();
       $producto->save();
    
        // Elimina la imagen anterior si existe y no es igual a la nueva imagen
        if ($nombreImagenAnterior && $nombreImagenAnterior !== $producto->imagen && file_exists(public_path('images/' . $nombreImagenAnterior))) {
            unlink(public_path('images/' . $nombreImagenAnterior)); 
        }

      

        
        return redirect()->route('products.index');
    }

    



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
            return redirect()->route('products.index')->with('success','producto eliminado');
        }
}

