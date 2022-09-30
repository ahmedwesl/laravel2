<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ByPriceController extends Controller
{
    function byprice (){

        $produit= Product::orderBy('price','desc')->get();
        return view('by-price', ['produit' => $produit]);

}}
