<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furnishing;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe\Stripe;
use Stripe\Charge;


class CartController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->only('getCheckout', 'postCheckout');
    }



    

    public function show()
    {
        if (!Session::has('cart'))
        {
            return view('/cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('/cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart'))
        {
            return view('/cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice + ($cart->totalQty * 100);
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart'))
        {
            return redirect('shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        Stripe::setApiKey('sk_test_BLpwPoRNFEJPBadF7Sy5dJhV');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "mxn",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Cargo de prueba"
            ));

            $order = new Order();
            $order->cart = serialize($cart);

            $order->name = $request->input('name');
            $order->address = $request->input('address');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);

        } catch (\Exception $e)
        {
            return redirect('home')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect('home')->with('success', 'Compra realizada exitosamente.');
        //Colocar {{ Session::get('success') }} si la session tiene success, usando un @if
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

    public function removeOne($id_mueble)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeOne( $id_mueble);
        if (count($cart->items) >0)
        {
            Session::put('cart', $cart);
        } else
        {
            Session::forget('cart');
        }
        return redirect('/show');
    }

    public function removeAll($id_mueble)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeAll( $id_mueble);
        if (count($cart->items) >0)
        {
            Session::put('cart', $cart);
        } else
        {
            Session::forget('cart');
        }
        return redirect('/show');
    }

}
