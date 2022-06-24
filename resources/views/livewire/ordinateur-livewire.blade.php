<div>


    @livewireStyles()
        
        
        
        <section class="container pt-5 mt-0">
            <!-- Heading-->
        {{--     @foreach ($categorie->produits as $produit )
                vv
            @endforeach --}}
    
    
    {{--           <div class="input-group d-none d-lg-flex flex-nowrap mx-4 col-sm-10">
                <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded-start w-100" type="text" placeholder="Chercher un produit" wire:model="search">
    
            </div> --}}
    
            <div class="input-group  col-sm-10">
                 <i class="ci-search ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded-start" type="text" placeholder="Chercher votre portable" wire:model.debounche.500ms="search">
    
            </div>
    
    
            <!-- Grid-->
            <div class="row pt-2 mx-n2">
    
        {{-- Produits --}}
    {{--     @foreach ($portables as $portable )
     --}}    @foreach ($ordinateurs as $ordinateur)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                      <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href="#">
                              <i class="ci-compare me-1"></i>Compare
                          </a>
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist">
                            <i class="ci-heart"></i>
                        </button>
                      </div>
    {{--                   <a class="card-img-top d-block overflow-hidden" href="{{route('show',$produit->id)}}">
     --}}                      <img src="{{ asset('/img/shop/catalog/63.jpg') }}" alt="{{ $ordinateur->nom }}">
                      </a>
                      <div class="card-body py-2">
                          <a class="product-meta d-block fs-xs pb-1" href="#">{{$ordinateur->resume}}</a>
                        <h3 class="product-title fs-sm">
                            <a href="">{{ $ordinateur->nom }}</a>
                        </h3>
                        <div class="d-flex justify-content-between">
                          <div class="product-price">
                              <span class="text-accent">{{ $ordinateur->prix }}</span> FCFA</span>
                          </div>
                          <div class="star-rating">
                                <i class="star-rating-icon ci-star-filled active"></i>
                                <i class="star-rating-icon ci-star-filled active"></i>
                                <i class="star-rating-icon ci-star-filled active"></i>
                                <i class="star-rating-icon ci-star-filled active"></i>
                                <i class="star-rating-icon ci-star-filled active"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body ">
                        <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button">
                          {{--   <i class="ci-cart fs-sm me-1">
                            </i> --}}
                            <i class=" fa fa-cart ">
                            </i>
                            Add to Cart
                        </button>
     {{--                    <div class="text-center">
                            <a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal">
                                <i class="ci-eye align-middle me-1">
                                    </i>Detail
                            </a>
                        </div> --}}
                      </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
            @endforeach
    
         <div class="col-lg-9">
            {{ $ordinateurs->links('vendor.livewire.bootstrap') }}
        </div> 
    
        </section>
    
    
               <!-- Brands carousel-->
       
    
    
    
        
    
    @livewireScripts()
    
    </div>