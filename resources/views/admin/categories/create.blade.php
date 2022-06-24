@extends('layouts.admin')

@section('admin')

<div class="container card-body col-lg-6">
    @if($errors->any())
        <div class="alert alert-danger error">
              @foreach ($errors->all() as $error)
              <ul>
                <li>{{ $error }}</li>
            </ul>
              @endforeach
        </div>
        
    @endif
    <form action="{{ route('categories.store') }}" method="post" class="form-group ">
        @csrf
        <label for="">Nom</label>
        <input type="text" name="nom" placeholder="Nom de la catégorie" class="form-control"/>
        <button class="btn btn-primary mb-2 mt-4">Ajouter</button>
    </form>

</div>

@endsection