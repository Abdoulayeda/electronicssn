@extends('layouts.admin')

@section('admin')

<div class="container">
    <h2>Liste des categories</h2>
    <div class="col-lg-5">
      <a href="{{ route('categories.create') }}" class="btn btn-primary">Ajouter</a>
    </div>
    @if(session('msgcategoriecreate'))
        <div class="alert alert-success">
            {{ session('msgcategoriecreate') }}
        </div>
    @endif

    @if (session('msgcategorieupdate'))
        <div class="alert alert-warning">
            {{ session('msgcategorieupdate') }}
        </div>
    @endif

    @if(session('msgcategoriedelete'))
        <div class="alert alert-danger">
            {{ session('msgcategoriedelete')}}      
       </div> 
    @endif


    <div>

    </div>
<table class="table table-striped">
    <thead class="bg-dark">
        <th>Numéro</th>
        <th>Nom</th>
        <th>Créer le</th>
        <th>Modifié le</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
       @foreach ($categories as $key=>$categorie )
       <tr>
        <td>{{ $key + 1 }}</td> 
        <td>{{ $categorie->nom }}</td>
        <td>{{$categorie->created_at }}</td>
        <td> {{ $categorie->updated_at }}</td></td>
        <td> 
            <a class="btn btn-warning mb-2" href="{{ route('categories.edit', $categorie->id) }}">
                <i class="fa fa-edit"></i>
            </a>
        </td>
        <td>
        <form action="{{ route('categories.destroy', $categorie->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger mb-2">
                <i class="fa fa-trash"></i></button>
        </form>
        </td>
    </tr>
       @endforeach
    </tbody>
</table>
</div>

@endsection