<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {   
        $produits = Produit::with('categorie')->get();
        $categories = Categorie::all();
        return view('admin.index',compact('produits', 'categories'));
    }
}
