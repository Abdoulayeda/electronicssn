@extends('layouts.admin')

@section('admin')

<div class="container">
    @if($errors->any())
        <div class="alert alert-danger error">
            @foreach ($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
            @endforeach
        </div>
    @endif

    <form action="{{ route('categories.update', $categorie->id) }}" method="post" class="form-group card-body col-lg-6">
        @method('PUT')
        @csrf
        <label for="">Nom</label>
        <input type="text" name="nom" value="{{ $categorie->nom }}" class="form-control"/>

        <button class="btn btn-primary mb-2 mt-4">Ajouter</button>
    </form>

</div>

@endsection