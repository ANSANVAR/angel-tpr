<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('productos.index');
    }
    public function mostrar(){
        return view('productos.mostrar');
    }
    public function comprar(){
        return view('productos.comprar');
    }
    public function promocion(){
        return view('productos.promocion');
    }
}