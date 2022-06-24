@extends('layouts.app')

@section('content')

@if(session('msgproduitdelete'))
   <div class="alert alert-warnii">
       {{ session('msgproduitdelete') }}
   </div>
@endif

<main class="page-wrapper">
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item">
                  <a class="text-nowrap" href="index.html">
                      <i class="ci-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap">
                  <a href="shop-grid-ls.html">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
          <h1 class="h3 text-light mb-0">Votre panier</h1>
        </div>
      </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <section class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
            <h2 class="h6 text-light mb-0">Produits</h2>
            <a class="btn btn-outline-primary btn-sm ps-2" href="shop-grid-ls.html">
                <i class="ci-arrow-left me-2"></i>Continue shopping
            </a>
          </div>
          @foreach (Cart::getContent() as  $cart)
          <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
            <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                <a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html">
                    <img src="{{ asset('storage/images/produits/'.$cart->attributes->image) }}" width="160" alt="Product">  </a>
              <div class="pt-2">
                <h3 class="product-title fs-base mb-2"><a href="#">{{ $cart->name }} </a></h3>
                <div class="fs-lg text-accent pt-2">{{number_format($cart->price, 0, ',' , ' ') }} x{{ $cart->quantity }} = {{ number_format($cart->price * $cart->quantity, 0, ',' , ' ') }} FCFA</div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
              
              <form action="{{ route('cart.update', $cart->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $cart->id }}" name="produit_id">
                <label class="form-label" for="quantity1">Quantité</label>
                <input class="form-control" type="number"  name="quantite" value="{{ $cart->quantity }}">  
                <button class="btn  px-0 text-warning" >
                    <i class="ci-close-circle me-2"></i>
                    <span class="fs-sm">Update</span>
                  </button>
              </form>
              
              
             <form action="{{ route('cart.destroy', $cart->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="produit_id" value="{{ $cart->id }}" /> 
                <button class="btn  px-0 text-danger">
                    <i class="ci-close-circle me-2"></i>
                    <span class="fs-sm">Enlever</span>
               </button>
             </form>

              
            </div>
          </div>

          <!-- Item-->
         @endforeach

         @if(Cart::getTotal() != 0)
         <a href="{{ route('deletecart') }}">Delete cart</a>
          <button class="btn btn-outline-danger d-block w-100 mt-4" type="button">
              <i class="ci-loading fs-base me-2"></i>Supprimer votre panier</button>
         @endif
         @if(Cart::getTotal() == 0)
            <div class="alert alert-warning">
                <h2>Votre panier est vide.</h2>
            </div>
         @endif
        </section>

       


        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
          <div class="bg-white rounded-3 shadow-lg p-4">
            <div class="py-2 px-xl-2">
              <div class="text-center mb-4 pb-3 border-bottom">
                <h2 class="h6 mb-3 pb-1">Total à payer</h2>
                <h3 class="fw-normal">{{ number_format(Cart::getTotal(), 0, ',',' ') }} FCFA</h3>
              </div>


              <a class="btn btn-primary btn-shadow d-block w-100 mt-4" href="#">
                <i class="ci-card fs-lg me-2"></i>Passer à la caisse</a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>

@endsection
