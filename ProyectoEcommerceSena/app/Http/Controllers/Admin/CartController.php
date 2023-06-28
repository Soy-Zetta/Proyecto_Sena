<?php

 namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use App\Models\Admin\producto;
// use Illuminate\Http\Request;
// use Hardevine\Shoppingcart\Facades\Cart;



// class CartController extends Controller
// {
//     public function shop()
//     {
//         $productos = producto::all();
//         //dd($producto);
//         return view('frontend.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['productos' => $productos]);
//     }

//     public function cart()
//     {
//         $cartCollection = \Cart::getContent();
//         //dd($cartCollection);
//         return view('frontend.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
//     }
    
//     public function remove(Request $request)
//     {
//         \Cart::remove($request->id);
//         return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
//     }

//     public function add(Request $request)
//     {
//         $producto = Producto::find($request->id);
//         //dd($producto);
//         \Cart::add(array(
//             'id' => $producto->id,
//             'name' => $producto->nombre,
//             'price' => $producto->precio,
//             'qty' => $producto->existencias,
//             'attributes' => [
//                 'image' => $producto->imagen,
//                 'slug' => $producto->slug
//             ]
//         ));

//         return redirect()->route('cart.index')->with('success_msg', 'Producto agregado al carrito.');
//     }

//     public function update(Request $request)
//     {
//         \Cart::update(
//             $request->id,
//             array(
//                 'quantity' => array(
//                     'relative' => false,
//                     'value' => $request->quantity
//                 ),
//             )
//         );
//         return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
//     }

//     public function clear()
//     {
//         \Cart::clear();
//         return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
//     }
// }







use App\Http\Controllers\Controller;
use App\Models\Admin\Producto;
use Illuminate\Http\Request;
use Cart;


class CartController extends Controller
{
    public function shop()
    {
        $productos = Producto::all();
        return view('frontend.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['productos' => $productos]);
    }

    public function cart()
    {
        $cartCollection = Cart::getContent();
        return view('frontend.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);
    }

    public function remove(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request $request)
    {
        $producto = Producto::find($request->id);

        Cart::add(array(
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'quantity' => $producto->existencias,
            'attributes' => [
                'image' => $producto->imagen,
                'slug' => $producto->slug
            ]
        ));

        return redirect()->route('cart.index')->with('success_msg', 'Producto agregado al carrito.');
    }

    public function update(Request $request)
    {
        Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
        ]);

        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear()
    {
        Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }
}

