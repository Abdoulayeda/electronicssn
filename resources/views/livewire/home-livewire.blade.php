<div>
    @if(session('msgproduitadd'))
    <div class="alert alert-success col-lg-12 col-sm-12">
        {{ session('msgproduitadd') }}
    </div>
   @endif

    <section class="bg-secondary py-4 pt-md-5">
        <div class="container py-xl-2">
          <div class="row">
            <!-- Slider     -->
            <div class="col-xl-9 pt-xl-4 order-xl-2">
              <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: false}">
                  <div>
                    <div class="row align-items-center">
                      <div class="col-md-6 order-md-2">
                          <img class="d-block mx-auto" src="{{ asset('img/home/hero-slider/05.jpg') }}" alt="VR Collection">
                      </div>
                      <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                        <h2 class="fw-light pb-1 from-bottom">Le monde de la musique</h2>
                        <h1 class="display-4 from-bottom delay-1">Headphones</h1>
                        <h5 class="fw-light pb-3 from-bottom delay-2">Fait ton meilleur choix</h5>
                        <div class="d-table scale-up delay-4 mx-auto mx-md-0">
                            <a class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop
                                <i class="fas fa-arrow-right ms-2 me-n1"></i>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="row align-items-center">
                      <div class="col-md-6 order-md-2">
                          <img class="d-block mx-auto" src="img/home/hero-slider/04.jpg" alt="VR Collection">
                      </div>
                      <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                        <h2 class="fw-light pb-1 from-start">Explore the best</h2>
                        <h1 class="display-4 from-start delay-1">VR Collection</h1>
                        <h5 class="fw-light pb-3 from-start delay-2">on the market</h5>
                        <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="row align-items-center">
                      <div class="col-md-6 order-md-2">
                          <img class="d-block mx-auto" src="img/home/hero-slider/06.jpg" alt="VR Collection">
                      </div>
                      <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                        <h2 class="fw-light pb-1 scale-up">Check our huge</h2>
                        <h1 class="display-4 scale-up delay-1">Smartphones</h1>
                        <h5 class="fw-light pb-3 scale-up delay-2">&amp; Accessories collection</h5>
                        <div class="d-table scale-up delay-4 mx-auto mx-md-0">
                            <a class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now
                                <i class="ci-arrow-right ms-2 me-n1"></i>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner group-->
            <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
              <div class="table-responsive" data-simplebar>
                <div class="d-flex d-xl-block">
                    <a class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="#" style="min-width: 16rem;">
                      <img src="img/home/banners/banner-sm01.png" width="125" alt="Banner">
                        <div class="py-4 px-2">
                        <h5 class="mb-2"><span class="fw-light">Caméra de </span><br>surveillance <span class="fw-light">with</span><br>360 Cam</h5>
                        <div class="text-info fs-sm">Voir plus<i class="fas fa-arrow-right fs-xs ms-1"></i></div>
                        </div>
                   </a>
                    <a class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="{{ route('portables')}}" style="min-width: 16rem;">
                     <img src="img/home/banners/banner-sm02.png" width="125" alt="Banner">
                    <div class="py-4 px-2">
                      <h5 class="mb-2">
                          <span class="fw-light">Portable de </span><br>derniere génération<br>
                          <span class="fw-light">are on </span>
                          Sale
                      </h5>
                      <div class="text-warning fs-sm">Voir plus<i class="fas fa-arrow-right fs-xs ms-1"></i></div>
                    </div>
                    </a>
                     <a class="d-flex align-items-center bg-faded-success rounded-3 pt-2 ps-2 mb-4" href="#" style="min-width: 16rem;">
                        <img src="img/home/banners/banner-sm03.png" width="125" alt="Banner">
                        <div class="py-4 px-2">
                          <h5 class="mb-2">
                            <span class="fw-light">Des ecouteurs simple</span><br>et des ecouteurs
                            <span class="fw-light"></span><br>bluetooth</h5>
                          <div class="text-success fs-sm">Voir plus<i class="fas fa-arrow-right fs-xs ms-1"></i></div>
                        </div>
                     </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    <section class="container pt-5 mt-0">
        <!-- Heading-->
        <div class="input-group  col-sm-10">
             <i class="fas fa-search fa-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
          <input class="form-control rounded-start" type="text" placeholder="Chercher un produit" wire:model.debounche.500ms="search">

        </div>


        <!-- Grid-->
        <div class="row pt-2 mx-n2 col-sm-12">

    {{-- Produits --}}
        @foreach ($produits as $produit )
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <div class="product-card-actions d-flex align-items-center">
                      <a class="btn-action nav-link-style me-2" href="#">
                          <i class="fas fa-compare me-1"></i>Compare
                      </a>
                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist">
                        <i class="fas fa-heart"></i>
                    </button>
                  </div>
                  <a class="card-img-top d-block overflow-hidden" href="{{ route('show', $produit->slug) }}">
                      <img src="{{ asset('/img/shop/catalog/63.jpg') }}" alt="{{ $produit->nom }}">
                  </a>
                  <div class="card-body py-2">
                      <p class="product-meta d-block fs-xs pb-1" >{{ $produit->resume }}</p>
                    <h3 class="product-title fs-sm">
                        <a href="{{ route('show', $produit->slug) }}">{{ $produit->nom }}</a>
                    </h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price">
                          <span class="text-accent">{{ number_format($produit->prix,0,',',' ') }}</span> FCFA</span>
                      </div>
                      <div class="star-rating">
                            <i class="fas fa-heart active"></i>
                            <i class="fas fa-heart active"></i>
                            <i class="fas fa-heart active"></i>
                            <i class="fas fa-heart active"></i>
                            <i class="fas fa-heart active"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body ">
                      <form action="{{ route('cart.store') }}" method="post">
                      @csrf
                       <input type="hidden" value="{{ $produit->id }}" name="produit_id">
                       <input type="hidden" value="1" name ="quantite">
                        <button class="btn btn-primary  w-100 mb-2" >
                            {{--   <i class="ci-cart fs-sm me-1">
                              </i> --}}
                              <i class="fas fa-shopping-cart"></i>
                              Add to Cart
                          </button>
                      </form>


                  </div>
                </div>
                <hr class="d-sm-none">
            </div>
        @endforeach
    </div>

    <div class="col-lg-9">
        {{ $produits->links('vendor.livewire.bootstrap') }}
    </div>

    </section>


           <!-- Brands carousel-->
     <section class="container mb-5 mt-4">
         <h2>Nos différentes marques</h2>
      <div class="tns-carousel border-end">
        <div class="tns-carousel-inner" data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/13.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/14.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/17.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/16.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/15.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/18.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/19.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
          <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;">
              <img class="d-block mx-auto" src="{{ asset('img/shop/brands/20.png') }}" style="width: 165px;" alt="Brand"></a>
          </div>
        </div>
      </div>
    </section>



    <section class="container pb-4 pb-md-5">
        <div class="row">
          <!-- Bestsellers-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Portables</h3>
             @foreach ($portables as $portable )
             <div class="d-flex align-items-center py-2 border-bottom">
                <a class="d-block flex-shrink-0" href="{{ route('show', $portable->slug) }}">
                    <img src="img/shop/cart/widget/06.jpg" width="64" alt="Product"></a>
              <div class="ps-2">
                <h6 class="widget-product-title"><a href="">{{ $portable->nom }}</a></h6>
                <h6 class="product-meta d-block fs-xs pb-1">{{ $portable->resume }}</h6>
                <div class="widget-product-meta"><span class="text-accent">{{ $portable->prix }}<small>FCFA</small></span></div>
              </div>
            </div>
             @endforeach


              <p class="mb-0">...</p>
              <a class="fs-sm" href="{{ route('portables') }}">Plus de portables<i class="fas fa-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- New arrivals-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Nouveaux ordinateur</h3>

                @foreach ($ordinateurs as $ordinateur )
                <div class="d-flex align-items-center py-2">
                    <a class="d-block flex-shrink-0" href="shop-single-v2.html">
                        <img src="img/shop/widget/09.jpg" width="64" alt="Product">
                    </a>
                  <div class="ps-2">
                    <h6 class="widget-product-title"><a href="">{{ $ordinateur->nom }}</a></h6>
                    <h6 class="product-meta d-block fs-xs pb-1">{{ $ordinateur->resume }}</h6>
                    <div class="widget-product-meta"><span class="text-accent">{{ $ordinateur->prix }}<small>FCFA</small></span></div>
                  </div>
                </div>
                @endforeach
              <p class="mb-0">...</p><a class="fs-sm" href=" {{ route('ordinateurs') }} ">Plus d'ordinateurs<i class="fas fa-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- Top rated-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Ecouteurs bluetooth</h3>
             @foreach ($ecouteurs as $ecouteur )
             <div class="d-flex align-items-center pb-2 border-bottom">
                <a class="d-block flex-shrink-0" href="shop-single-v2.html">
                    <img src="img/shop/widget/10.jpg" width="64" alt="Product"></a>
              <div class="ps-2">
                <h6 class="widget-product-title"><a href="">{{ $ecouteur->nom }}</a></h6>
                <h6 class="product-meta d-block fs-xs pb-1">{{ $ecouteur->resume }}</h6>
                <div class="widget-product-meta"><span class="text-accent">{{ $ecouteur->prix }}<small>FCFA</small></span>
                </div>
              </div>
            </div>
             @endforeach



              <p class="mb-0">...</p>
              <a class="fs-sm" href="{{ route('ecouteurs') }}">Voir de produits<i class="fas fa-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
        </div>
      </section>

</div>
