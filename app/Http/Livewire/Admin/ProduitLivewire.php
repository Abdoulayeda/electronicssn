<?php

namespace App\Http\Livewire\Admin;

use App\Models\Produit;
use Livewire\Component;
use Livewire\WithPagination;

class ProduitLivewire extends Component
{
    use WithPagination;

    public string $search = '';
    public function render()
    {

        $produits = Produit::where('nom','LIKE', "%$this->search%")->paginate(10);
        return view('livewire.admin.produit-livewire', compact('produits'));
    }
}
