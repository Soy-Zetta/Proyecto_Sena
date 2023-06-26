<?php

namespace App\Http\Controllers;

use App\Models\pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = pedido::all();
        return view('pedidos.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validarDatos = $request->validate([
            'cliente_numero_documento' => 'required',
            'producto_id' => 'required',
            'fecha' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            
            
        ]);
        //Crear nuevo pedido
        pedido::create($request->all());

        //redireccionar a la pagina de index o a otra pagina relevante 
        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente');
        
    }


    public function show(string $id)
    {
        $pedido = pedido::find0rfail($id);
        return view('pedidos.show',compact('pedido'));
    }


    public function edit(string $id)
    {
        $pedido = pedido::find0rfail($id);
        //logica para cargar datos necesarios en la vista de edicion
        return view('pedidos.edit',compact('pedido'));
    }

  
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cliente_numero_documento' => 'required',
            'producto_id' => 'required',
            'fecha' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        // Actualizar pedido existente
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        // Redireccionar a la página de detalles del pedido o a otra página relevante
        return redirect()->route('pedidos.update', $pedido->id)->with('success', 'Pedido actualizado exitosamente');
    }


    public function destroy(string $id)
    {
        //buscar y eliminar pedido
        $pedido = pedido::findOrFail($id);
        $pedido->delete();

        //redireccionar a la pagina de index o a otra pagina relevante 

        return redirect()->route('pedidos.index')->with('succes','pedido eliminado exitosamente');
    }
}
