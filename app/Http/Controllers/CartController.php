<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furnishing;
use App\Cart;
use Session;

class CartController extends Controller
{
    //
    public function index()
    {
        return view('cart');
    }

    

    

    public function show()
    {
        if (!Session::has('cart'))
        {
            return view('/show');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('/cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart'))
        {
            return view('/show');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout()
    {
        if (!Session::has('cart'))
        {
            return view('/show');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

    public function addToCart(Request $request, $id_mueble)
    {
        
        $furnish = Furnishing::find($id_mueble);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($furnish, $furnish->id_mueble);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect('/products');
    }
}
