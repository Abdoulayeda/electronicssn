<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
class HomeController extends Controller
{
    public function home()
    {

        return view('home');
    }

    /**  public function index()
    {
        return redirect()->route('home');
    } */

    public function show($slug)
    {
        $produit = Produit::where('slug',$slug)->first();

        return view('show', compact('produit'));
    }


}
