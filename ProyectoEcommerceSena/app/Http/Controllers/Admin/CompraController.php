<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\compra;
use App\Models\Admin\producto;
use App\Models\Admin\proveedore;
use App\Models\Admin\detallecompra;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Con Paginación

        $compras = compra::paginate(10);
        return view('admin.compras.index',compact('compras'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $proveedores = proveedore::get();
       $productos= producto::get();
       return view('admin.compras.create',compact('proveedores','productos'));
    }

   

    public function store(Request $request)
    {
        // $results = [];
        // $total = 0.00;
        
        // foreach ($request->productos_id as $key => $producto) {
        //     $results[] = [
        //         "productos_id" => $request->productos_id[$key],
        //         "cantidad" => $request->cantidad[$key],
        //         "precio" => $request->precio[$key],
        //         "descripcion" => $request->descripcion[$key],
        //     ];
        
            
        //     $subtotal = $request->cantidad[$key] * $request->precio[$key];
        //     $total += $subtotal;
        // }
        
        // $compra = compra::create($request->all() + [
        //     'fecha' => Carbon::now('America/Bogota'),
        //     'proveedores_id' => $request->proveedor,
        //     'users_id' => Auth::user()->id,
        //     'total' => $total,
        // ]);
        
        
        // $compra->detallecompra()->createMany($results);
        
        // return redirect()->route('compras.index');       
        
        
        
        
        
        
        
        
         $compra = compra::create($request->all() + [
              'fecha' => Carbon::now('America/Bogota'),
              'proveedores_id' =>$request->proveedor,
              'users_id'=>Auth::user()->id,
          ]);
          
        //   $total = $request->cantidad * $request->precio;
        
          $results = [];
          foreach ($request->productos_id as $key => $producto) {
              $results[] = [
                  "productos_id" => $request->productos_id[$key],
                  "cantidad" => $request->cantidad[$key],
                  "precio" => $request->precio[$key],
                  "descripcion" => $request->descripcion[$key],
                //   "total"=> $total

              ];

          }
       
          $compra->detallecompra()->createMany($results);
          return redirect()->route('compras.index');
    }

    
    
    public function show(string $id)
    {
        $compra = compra::findOrFail($id);
        return view('admin.compras.show', compact('compra'));
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
        $compra = compra::findOrFail($id);
        $compra->update($request->all());

        return redirect()->route('compras.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $compra = compra::findOrFail($id);
        $compra->detallecompra()->delete();
        $compra->delete();

        return redirect()->route('compras.index');
    }
}
