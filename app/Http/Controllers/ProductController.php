<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller

{
    function listeproduits()
    {
//        $produits = DB::select('SELECT * FROM products');
        $produits= Product::All();
        return view("product-list", compact('produits'));

    }

    function ficheproduit($id)
    {
        $produit = Product::findOrFail($id);
        return view('product-details', ['produit' => $produit]);

        if ($produit === null) {
            abort(404);
        }
    }


}

//$produits = Products::All();
