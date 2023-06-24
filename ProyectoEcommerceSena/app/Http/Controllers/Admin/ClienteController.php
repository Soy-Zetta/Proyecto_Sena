<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //Con Paginación
         $clientes = cliente::paginate(10);
         return view('admin.customers.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$clientes =cliente::all();
       // return view('admin.customers.create',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Valida los datos del formulario
         $validarDatos = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'contraseña' => 'required',
            'telefono' => 'required',
            'tipop_documento' => 'required',
            'numero_documento' => 'required',
            
        ]);
      //  dd($validarDatos);
       
        
        // Muestra los datos validados
        
      
     
    
        // Crea un nuevo objeto Producto con los datos validados
        $cliente = new cliente();
        $cliente->nombre = $validarDatos['nombre'];
        $cliente->email = $validarDatos['email'];
        $cliente->contraseña = $validarDatos['contraseña'];
        $cliente->telefono = $validarDatos['telefono'];
        $cliente->tipo_documento = $validarDatos['ttipo_documento'];
        $cliente->numero_documento = $validarDatos['numero_documento'];
    
        // Guarda el objeto Producto en la base de datos
        $cliente->save();
    
        
        // Redirige a la vista de detalles del producto o a donde desees
       return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $numero_documento)
    {
        $cliente = cliente::findOrFail($numero_documento);
        return view('customers.show',compact('cliente'));
    }

    public function edit(string $numero_documento)
    {
        $cliente = cliente::findOrFail($numero_documento);
        // dd($clientessat  );
        return view('admin.customers.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $numero_documento)
    {
        //Valida los datos del formulario
        $validarDatos = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'contraseña' => 'required',
            'telefono' => 'required',
            'tipop_documento' => 'required',
            'numero_documento' => 'required',
            
        ]);

        $cliente=cliente::findOrFail($numero_documento);
        $cliente->nombre = $validarDatos['nombre'];
        $cliente->email = $validarDatos['email'];
        $cliente->contraseña = $validarDatos['contraseña'];
        $cliente->telefono = $validarDatos['telefono'];
        $cliente->tipo_documento = $validarDatos['ttipo_documento'];
        $cliente->numero_documento = $validarDatos['numero_documento'];
        $cliente->update();
        
        return redirect()->route('customers.index');


    }

    public function destroy(string $numero_documento)
    {
        $cliente = cliente::findOrFail($numero_documento);
        $cliente->delete();

        return redirect()->route('customers.index');
    }
}
