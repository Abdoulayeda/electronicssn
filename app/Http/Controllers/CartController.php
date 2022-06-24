<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Produit;
use Illuminate\Http\Request;
//use Cart;
//use Darryldecode\Cart\Facades\CartFacade as Cart;
//use Darryldecode\Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index', ['carts' => \Cart::getContent()]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = Produit::find($request->produit_id);

        if($produit->quantite < $request->quantite){
           return redirect()->back()->with('msg_error', 'La quantité de produit que vous avez choisi n\'est pas disponible.');
        }
        $produit->quantite = $produit->quantite - $request->quantite;
        Cart::add(array(
          'id' => $produit->id,
          'name' => $produit->nom,
          'quantity' => $request->quantite,
          'price' => $produit->prix,
           'attributes' =>[
               'image' => $produit->image
            ],
          'associatedModel' => $produit
        ));

       // $produit->save();

        return redirect()->back()->with('msgproduitadd','Produit ajouté avec success au panier');
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
        $id = $request->produit_id;
        $produit = Produit::find($id);
        Cart::update($produit->id,array(
            'quantity' => $request->quantite,
            'associatedModel' => $produit
        ));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        $produit = Produit::find($request->produit_id);
        Cart::remove($produit->id);
        return redirect()->back()->with('msgproduitdelete','Produit retirer avec success du panier');;

    }


    public function deletecart()
    {
        return Cart::clear();

        return redirect()->back();
    }
}
