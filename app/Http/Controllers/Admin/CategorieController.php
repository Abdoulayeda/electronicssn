<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'nom'=> ['required','min:6',
                Rule::unique(Categorie::class),
                ]
        ]);
        $categorie = new Categorie();
        $categorie->nom = $request->nom;
        $categorie->save();

        return redirect()->route('categories.index')->with('msgcategoriecreate','Caégorie créer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('admin.categories.edit', compact('categorie'));
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
        $request->validate([
            'nom'=> ['required','min:6',
                Rule::unique(Categorie::class),
                ]
            ]);
        $categorie = Categorie::find($id);
        $categorie->nom = $request->nom;
        $categorie->save();

        return redirect()->route('categories.index')->with('msgcategorieupdate','Catégorie modifié avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.index')->with('msgcategoriedelete','Categorie supprimer avec success');


    }
}
