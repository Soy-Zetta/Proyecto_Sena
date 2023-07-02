<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\compra;
use App\Models\Admin\proveedore;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Con Paginación

        $compras = compra::paginate(10);
        return view('frontend/compras.index',compact('compras'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $proveedores = proveedore::get();
       return view('admin.compras.create',compact('proveedores'));
    }

   

    public function store(Request $request)
    {
     
        $compra = compra::create($request->all());
        
        foreach($request->producto_id as $key => $producto){
            $results = array("productos_id" =>$request->productos_id[$key],"cantidad"=>$request->cantidad[$key],"precio"=>$request->precio[$key],"total"=>$request->total[$key]);
        }
        $compra->detallecompra()->createMany($results);
        return redirect()->route('frontend/compras.index');
  
    }

    
    
    public function show(string $id)
    {
        $compra = compra::findOrFail($id);
        return view('compras.show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $compra =compra::findorfail($id);
        $proveedores = proveedore::all();
        return view('admin.compras.edit',compact('compra','proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $compra = compra::findOrFail($id);
        // $compra->productos()->delete();
        // $compra->delete();

        // return redirect()->route('compras.index');
    }
}
