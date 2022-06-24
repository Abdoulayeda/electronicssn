@extends('layouts.admin')

@section('admin')

  @if($errors->all())
    <ul>
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </ul>
  @endif

<div class="container card-body ">
    <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="form-data/multiple" >
        @method('PUT')
        @csrf
        <label>Nom</label>
        <input class="form-control" value="{{ $produit->nom }}" type="text" name="nom" />
        <label>Resumer</label>
        <input class="form-control" type="text" value="{{ $produit->resume }}" name="resume" />
        <label>Description</label>
        <input class="form-control" type="text" value="{{ $produit->description }}" name="description" />
        <label>Prix</label>
        <input class="form-control" type="number" value="{{ $produit->prix }}" name="prix"/>
        <label>Quantité</label>
        <input class="form-control" type="number" value="{{ $produit->quantite }}" name="quantite"/>
      {{--   <label>Image</label>
        <input class="form-control" type="file" value="{{ $produit->image }}"  name="image"/>
 --}}
       <input class="form-control" name="categorie_id" type="hidden" value="{{ $produit->categorie_id }}" name="quantite"/>


        <button class='btn btn-warning mt-2'>Modifier</button>
    </form>
    </div>
@endsection