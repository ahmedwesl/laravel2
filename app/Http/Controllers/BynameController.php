<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BynameController extends Controller
{
   function byname (){

       $produit= Product::orderBy('name')->get();
       return view('by-name', ['produit' => $produit]);


   }





}
