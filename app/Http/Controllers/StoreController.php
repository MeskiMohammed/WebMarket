<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function get_products(){
        $products = Produit::all();
        return view('client.products',compact('products'));
    }
}
