<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function tiendas()
    {
        return view('tiendas');
    }

    public function quienes_somos()
    {
        return view('quienes-somos');
    }

    public function accion()
    {
        return view('accion-furnyish');
    }
}
