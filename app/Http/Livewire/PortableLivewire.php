<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;

class PortableLivewire extends Component
{

    use WithPagination;
  public string $search = '';

    public function render()
    {
        return view('livewire.portable-livewire',
        ['portables'=>Categorie::where('nom', 'Portable')->first()->produits()->where('nom', 'LIKE',"%$this->search%")->paginate(4)]);
    }
}
