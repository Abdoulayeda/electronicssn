<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.produits.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
         'nom' => 'required|min:5|max:50',
         'resume' => 'required|min:5|max:20',
         'description' => 'required|min:50',
         'image' => 'file|max:1024|mimes:jpg,png',
         'prix' => 'numeric|integer',
         'quantite' => 'integer|min:1',
        ]);

        $produit = new Produit();

        $image = $request->file('image');
        $nom_image = 'Produit'.time().uniqid().'.'.$image->getClientOriginalExtension();
        $image->storeAs('images/produits/',$nom_image);
        $produit->nom = $request->nom;
        $produit->slug = Str::slug($request->nom.''.time().''.uniqid());
        $produit->resume = $request->resume;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->image =$nom_image;
        $produit->quantite = $request->quantite;
        $produit->categorie_id = $request->categorie_id;

        $produit->save();

        return redirect()->route('produits.index')->with('msgproduitcreate','Produit ajouté aves success');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);
        return view('admin.produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('admin.produits.edit', compact('produit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Produit::find($id);

        //$image = $request->file('image');
       // $nom_image = 'Produit'.time().uniqid().'.'.$image->getClientOriginalExtension();
      //  $image->storeAs('images/produits/',$nom_image);
        $produit->nom = $request->nom;
        $produit->slug = Str::slug($request->nom.''.time().''.uniqid());
        $produit->resume = $request->resume;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
      //  $produit->image =$nom_image;
        $produit->quantite = $request->quantite;
        $produit->categorie_id = $request->categorie_id;

        $produit->save();

        return redirect()->route('produits.index')->with('msgproduitupdate','Produit modifié aves success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();

        return redirect()->route('produits.index')->with('msgproduitdelete','Produit supprimé avec success');
    }
}
