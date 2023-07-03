<?php
namespace App\Http\Controllers\Admin;

use App\Models\Admin\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class CartController extends Controller
{
    public function shop()
    {
        $productos = Producto::all();
      // dd($productos);
        return view('frontend.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['productos' => $productos]);
    }



    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        //return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;


        $totalQuantity = \Cart::getTotalQuantity();
        $totalPrice = \Cart::getTotal();
    
        return view('frontend.cart', compact('cartCollection', 'totalQuantity', 'totalPrice'))
            ->withTitle('E-COMMERCE STORE | CART');
    }




    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request $request){
       // dd($request);
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
               
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

 

}














// use App\Http\Controllers\Controller;

 //use Illuminate\Http\Request;
// use Cart;


// class CartController extends Controller
// {
//     public function shop()
//     {
//         $productos = Producto::all();
//         return view('frontend.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['productos' => $productos]);
//     }

//     public function cart()
//     {
//         $cartCollection = Cart::getContent();
//         return view('frontend.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);
//     }

//     public function remove(Request $request)
//     {
//         Cart::remove($request->id);
//         return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
//     }

//     public function add(Request $request)
//     {
//         $producto = Producto::find($request->id);

//         Cart::add(array(
//             'id' => $producto->id,
//             'name' => $producto->nombre,
//             'price' => $producto->precio,
//             'quantity' => $producto->existencias,
//             'attributes' => [
//                 'image' => $producto->imagen,
//                 'slug' => $producto->slug
//             ]
//         ));

//         return redirect()->route('cart.index')->with('success_msg', 'Producto agregado al carrito.');
//     }

//     public function update(Request $request)
//     {
//         Cart::update($request->id, [
//             'quantity' => [
//                 'relative' => false,
//                 'value' => $request->quantity
//             ]
//         ]);

//         return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
//     }

//     public function clear()
//     {
//         Cart::clear();
//         return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
//     }
// }





