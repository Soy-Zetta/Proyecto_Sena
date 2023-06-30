<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\cliente;
use App\Models\Admin\pedido;
use App\Models\Admin\producto;
use Illuminate\Http\Request;




class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::with('producto','cliente')->get();
        return view('admin.pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = producto::all();
        $clientes = cliente::all();

        return view('admin.pedidos.create',compact('productos','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_numero_documento' => 'required',
            'producto_id' => 'required',
            'fecha' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
            
        ]);

        $total = $request->cantidad * $request->precio;

        Pedido::create([
            'cliente_numero_documento' => $request->cliente_numero_documento,
            'producto_id' => $request->producto_id,
            'fecha' => $request->fecha,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'total' => $total,
        ]);
        

        return redirect()->route('admin.pedidos.index')->with('success', 'Pedido creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        $total = $pedido->getTotal();
        
        return view('admin.pedidos.show', compact('pedido','total'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('admin.pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_numero_documento' => 'required',
            'producto_id' => 'required',
            'fecha' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
            

        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->update([
            'cliente_numero_documento' => $request->cliente_numero_documento,
            'producto_id' => $request->producto_id,
            'fecha' => $request->fecha,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'total' => $request->cantidad * $request->precio,
        ]);

        return redirect()->route('admin.pedidos.index')->with('success', 'Pedido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('admin.pedidos.index')->with('success', 'Pedido eliminado exitosamente');
    }
}
