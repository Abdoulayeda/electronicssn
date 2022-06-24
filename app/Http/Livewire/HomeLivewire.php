<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;
use App\Models\Categorie;
//use WithPagination;

class HomeLivewire extends Component
{
    use \Livewire\WithPagination;

    public string $search = '';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $produits = Produit::where('nom', 'LIKE', "%$this->search%")->paginate(8);
        $portables = Categorie::where('nom', 'Portable')->first()->produits()->orderBy('created_at', 'desc')->limit(4)->get();
        $ordinateurs = Categorie::where('nom', 'Ordinateur')->first()->produits()->orderBy('created_at', 'desc')->limit(4)->get();
        $ecouteurs = Categorie::where('nom', 'Ecouteur Bluetooth')->first()->produits()->orderBy('created_at', 'desc')->limit(4)->get();
        //$televiseurs = Categorie::where('nom', 'Téléviseur')->first()->produits()->orderBy('created_at', 'desc')->limit(4)->get();

        return view('livewire.home-livewire', compact('produits',
                                                              'portables',
                                                              'ordinateurs',
                                                              'ecouteurs',
                                                              
                                                              ));
    }
}
