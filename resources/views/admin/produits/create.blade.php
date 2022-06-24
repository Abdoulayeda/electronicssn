@extends('layouts.admin')

@section('admin')

<div class="container card-body ">
    
    @if($errors->any())
    <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach ()
            </ul>
    </div>
    @endif

<form action="{{ route('produits.store') }}" method="POST" class="form-group col-lg-8" enctype="multipart/form-data" >
    @csrf
    <label>Nom</label>
    <input class="form-control" type="text" name="nom" />
    <label>Resumer</label>
    <input class="form-control" type="text" name="resume" />
    <label>Description</label>
    <input class="form-control" type="text" name="description" />
    <label>Prix</label>
    <input class="form-control" type="number" name="prix"/>
    <label>Quantité</label>
    <input class="form-control" type="number" name="quantite"/>
    <label>Image</label>
    <input class="form-control" type="file"  name="image"/>
    <select name="categorie_id" class="form-control col-lg-4">
        @foreach ($categories as $categorie )
        <option class="form-control-file" value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
        @endforeach
    </select>


    <button class='btn btn-primary mt-2'>Ajouter</button>
</form>
</div>




@endsection