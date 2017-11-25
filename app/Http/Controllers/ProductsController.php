<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Furnishing;

class ProductsController extends Controller
{
    //
    public function index() {

        $muebles = Furnishing::all();
        //dd($muebles);
        return view('products', compact('muebles'));

    }

    public function show($id_mueble)
    {
    
        $mueble = Furnishing::where('id_mueble', $id_mueble)->first();
        
        return view('single', compact('mueble'));
    }
}
