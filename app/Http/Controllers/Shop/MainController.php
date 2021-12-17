<?php

namespace App\Http\Controllers\Shop;


use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index() {

        // SELECT * FROM produits
        $produits = Produit::all();
        //dd($produits);

        return view('shop.index', compact('produits')); //compact() permet de "passer" la variable a la vue
    }

    public function produit(Request $request) {

        $produit = Produit::find($request->id);

        return view('shop.produit', compact('produit'));
    }
}
