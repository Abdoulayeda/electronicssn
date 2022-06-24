<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;

class OrdinateurLivewire extends Component
{
    use WithPagination;
    
    public string $search = '';
    public function render()
    {
        return view('livewire.ordinateur-livewire',
        ['ordinateurs' => Categorie::where('nom','Ecouteur Bluetooth')->first()->produits()->where('nom','LIKE',"%$this->search%")->paginate(12)
        ]);
    }
}
