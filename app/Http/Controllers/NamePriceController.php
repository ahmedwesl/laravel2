<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NamePriceController extends Controller
{
    function bynameprice ($id)
    {
        $produit =Product::find($id);
        return view('name-price', ['produit' => $produit]);

    }}
