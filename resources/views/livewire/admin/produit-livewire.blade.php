<div>
    <div>
        <div>

            <div class="container mb-10 mt-6">
                <h2>Liste des produits</h2>

                 
                     
                

                  @if(session('msgproduitcreate'))
                      <div class="alert alert-success">
                         {{ session('msgproduitcreate') }}
                       </div>
                    @endif

                    @if(session('msgproduitupdate'))
                    <div class="alert alert-warning">
                       {{ session('msgproduitupdate') }}
                     </div>
                  @endif


                  @if(session('msgproduitdelete'))
                  <div class="alert alert-danger">
                     {{ session('msgproduitdelete') }}
                   </div>
                @endif
                <div>
                    <a class="btn btn-primary mb-2" href="{{ route('produits.create') }}">Ajouter un produit</a>

                </div>
             <div class="form-group">
                 <input type="text" class="form-control" placeholder="Chercher  un produit" wire:model="search"/>

             </div>
                 <table class="table table-striped table-bordered ">
                  <thead class="bg-dark">
                      <th>Numéro</th>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Quantite</th>
                      <th>Prix</th>
                      <th>Catégorie</th>
                      <th>Image</th>
                      <th colspan="3">Action</th>
                  </thead>
                  <tbody>
                  @foreach ( $produits as $key=>$produit )
                    <tr>
                        <td>{{ ($key+1)*$page }}</td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->resume }}</td>
                        <td>{{ $produit->quantite }}</td>
                        <td>{{ number_format( $produit->prix, 0, ',', ' ' ) }} FCFA</td>
                        <td>{{ $produit->categorie->nom }}</td>
                        <td><img src="{{ asset('/img/shop/catalog/63.jpg') }}" width="125" height="125" alt="Banner"></td>
                        <td> 
                            <a class="btn btn-info mb-2" href="{{ route('produits.show', $produit->id) }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                        <td> 
                            <a class="btn btn-warning mb-2" href="{{ route('produits.edit', $produit->id) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                        <form action="{{ route('produits.destroy', $produit->id) }}" method="post">
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
                {{$page}} 
                 {{ $produits->links('vendor.livewire.bootstrap') }}
 

            </div>

        </div>

    </div>

</div>
