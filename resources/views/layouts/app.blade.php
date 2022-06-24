<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Electronics Store</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/drift-zoom/dist/drift-basic.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/lightgallery.js/dist/css/lightgallery.min.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}"/>
  </head>
  <body class="handheld-toolbar-enabled">
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">
                    <i class="ci-unlocked me-2 mt-n1"></i>Se connecter</a></li>
                {{-- <li class="nav-item">
                    <a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false">
                        <i class="ci-user me-2 mt-n1"></i>Sign up
                    </a>
                </li> --}}
              </ul>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body tab-content py-4">
                {{-- Sign in --}}
              <form action="{{ route('login') }}" method="POST" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                @csrf
                <div class="mb-3">
                  <label class="form-label"  for="si-email">Email address</label>
                  <input class="form-control" name="email" type="email" id="si-email" placeholder="Votre email" required>
                  <div class="invalid-feedback">Entrez un email valide.</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="si-password">Mot de passe</label>
                  <div class="password-toggle">
                    <input class="form-control" name="password" type="password" id="si-password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox">
                       <span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="mb-3 d-flex flex-wrap justify-content-between">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="si-remember">
                    <label class="form-check-label" for="si-remember">Se souvenir de moi</label>
                  </div><a class="fs-sm" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                </div>
                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Se connecter</button>
              </form>

              {{-- Registration --}}
      {{--         @if($errors->any())
    <ul>
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </ul>

    @endif --}}
              {{-- <form action="{{ route('register') }}" method="post" class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="su-name">Nom</label>
                  <input class="form-control" name="name" type="text" id="su-name" placeholder="John Doe" required>
                  <div class="invalid-feedback">Entrez votre  nom.</div>
                </div>
                <div class="mb-3">
                  <label for="su-email">Address email </label>
                  <input class="form-control" name="email" type="email" id="su-email" placeholder="votre email" required>
                  <div class="invalid-feedback">Entrez un email valide.</div>
                </div>
                <div class="mb-3">
                    <label>Téléphone </label>
                    <input class="form-control" name="telephone" type="text" id="su-phone" placeholder="votre email" required>
                    <div class="invalid-feedback">Entrez un numéro de telephone.</div>
                  </div>

                <div class="mb-3">
                  <label class="form-label" for="su-password">Mot de passe</label>
                  <div class="password-toggle">
                    <input class="form-control" name="password" type="password" id="su-password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="su-password-confirm">Confirmer votre mot de passe</label>
                  <div class="password-toggle">
                    <input class="form-control" name="password_confirmation" type="password" id="su-password-confirm" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check"  type="checkbox">
                        <span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Enregistrer</button>
              </form> --}}
            </div>
          </div>
        </div>
      </div>
      <main class="page-wrapper">
        <!-- Quick View Modal-->
        <div class="modal-quick-view modal fade" id="quick-view-electro" tabindex="-1">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title product-title"><a href="shop-single-v2.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Go to product page">Smartwatch Youth Edition<i class="ci-arrow-right fs-lg ms-2"></i></a></h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Product gallery-->
                  <div class="col-lg-7 pe-lg-0">
                    <div class="product-gallery">
                      <div class="product-gallery-preview order-sm-2">
                        <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="img/shop/single/gallery/05.jpg" data-zoom="img/shop/single/gallery/05.jpg" alt="Product image">
                          <div class="image-zoom-pane"></div>
                        </div>
                        <div class="product-gallery-preview-item" id="second"><img class="image-zoom" src="img/shop/single/gallery/06.jpg" data-zoom="img/shop/single/gallery/06.jpg" alt="Product image">
                          <div class="image-zoom-pane"></div>
                        </div>
                        <div class="product-gallery-preview-item" id="third"><img class="image-zoom" src="img/shop/single/gallery/07.jpg" data-zoom="img/shop/single/gallery/07.jpg" alt="Product image">
                          <div class="image-zoom-pane"></div>
                        </div>
                        <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom" src="img/shop/single/gallery/08.jpg" data-zoom="img/shop/single/gallery/08.jpg" alt="Product image">
                          <div class="image-zoom-pane"></div>
                        </div>
                      </div>
                      <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th05.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#second"><img src="img/shop/single/gallery/th06.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#third"><img src="img/shop/single/gallery/th07.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th08.jpg" alt="Product thumb"></a></div>
                    </div>
                  </div>
                  <!-- Product details-->
                  <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                    <div class="product-details ms-auto pb-3">
                      <div class="mb-2">
                        <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                        </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 Reviews</span>
                      </div>
                      <div class="h3 fw-normal text-accent mb-3 me-1">$124.<small>99</small></div>
                      <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Color:</span><span class="text-muted" id="colorOptionText">Dark blue/Orange</span></div>
                      <div class="position-relative me-n4 mb-3">
                        <div class="form-check form-option form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="color" id="color1" data-bs-label="colorOptionText" value="Dark blue/Orange" checked>
                          <label class="form-option-label rounded-circle" for="color1"><span class="form-option-color rounded-circle" style="background-color: #f25540;"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="color" id="color2" data-bs-label="colorOptionText" value="Dark gray/Green">
                          <label class="form-option-label rounded-circle" for="color2"><span class="form-option-color rounded-circle" style="background-color: #65805b;"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="color" id="color3" data-bs-label="colorOptionText" value="White">
                          <label class="form-option-label rounded-circle" for="color3"><span class="form-option-color rounded-circle" style="background-color: #f5f5f5;"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="color" id="color4" data-bs-label="colorOptionText" value="Black">
                          <label class="form-option-label rounded-circle" for="color4"><span class="form-option-color rounded-circle" style="background-color: #333;"></span></label>
                        </div>
                        <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>Product available</div>
                      </div>
                      <div class="d-flex align-items-center pt-2 pb-4">
                        <select class="form-select me-3" style="width: 5rem;">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="button">
                            <i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                      </div>
                      <div class="d-flex mb-4">
                        <div class="w-100 me-3">
                          <button class="btn btn-secondary d-block w-100" type="button"><i class="ci-heart fs-lg me-2"></i><span class='d-none d-sm-inline'>Add to </span>Wishlist</button>
                        </div>
                        <div class="w-100">
                          <button class="btn btn-secondary d-block w-100" type="button"><i class="ci-compare fs-lg me-2"></i>Compare</button>
                        </div>
                      </div>
                      <h5 class="h6 mb-3 py-2 border-bottom"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Product info</h5>
                      <h6 class="fs-sm mb-2">General</h6>
                      <ul class="fs-sm pb-2">
                        <li><span class="text-muted">Model: </span>Amazfit Smartwatch</li>
                        <li><span class="text-muted">Gender: </span>Unisex</li>
                        <li><span class="text-muted">OS campitibility: </span>Android / iOS</li>
                      </ul>
                      <h6 class="fs-sm mb-2">Physical specs</h6>
                      <ul class="fs-sm pb-2">
                        <li><span class="text-muted">Shape: </span>Rectangular</li>
                        <li><span class="text-muted">Body material: </span>Plastics / Ceramics</li>
                        <li><span class="text-muted">Band material: </span>Silicone</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Navbar Electronics Store-->
        <header class="shadow-sm">
          <!-- Topbar-->
          <div class="topbar topbar-dark bg-dark">
            <div class="container">
              <div>
                <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" width="20" alt="English">Eng / $</a>
                  <ul class="dropdown-menu my-1">
                    <li class="dropdown-item">
                      <select class="form-select form-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/fr.png" width="20" alt="Français">Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/it.png" width="20" alt="Italiano">Italiano</a></li>
                  </ul>
                </div>
                <div class="topbar-text text-nowrap d-none d-md-inline-block border-start border-light ps-3 ms-3"><span class="text-muted me-1">Available 24/7 at</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
              </div>
              <div class="topbar-text dropdown d-md-none ms-auto"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Wishlist / Compare / Track</a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="account-wishlist.html"><i class="ci-heart text-muted me-2"></i>Wishlist (3)</a></li>
                  <li><a class="dropdown-item" href="comparison.html"><i class="ci-compare text-muted me-2"></i>Compare (3)</a></li>
                  <li><a class="dropdown-item" href="order-tracking.html"><i class="ci-location text-muted me-2"></i>Order tracking</a></li>
                </ul>
              </div>
              <div class="d-none d-md-block ms-3 text-nowrap"><a class="topbar-link d-none d-md-inline-block" href="account-wishlist.html"><i class="ci-heart mt-n1"></i>Wishlist (3)</a><a class="topbar-link ms-3 ps-3 border-start border-light d-none d-md-inline-block" href="comparison.html"><i class="ci-compare mt-n1"></i>Compare (3)</a><a class="topbar-link ms-3 border-start border-light ps-3 d-none d-md-inline-block" href="order-tracking.html"><i class="ci-location mt-n1"></i>Order tracking</a></div>
            </div>
          </div>
          <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
          <div class="navbar-sticky bg-light">
            <div class="navbar navbar-expand-lg navbar-light">
              <div class="container"><a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="index.html">
                  <img src="img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2" href="index.html"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
                <!-- Search-->
                <div class="input-group d-none d-lg-flex flex-nowrap mx-4"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input class="form-control rounded-start w-100" type="text" placeholder="Search for products">
                  <select class="form-select flex-shrink-0" style="width: 10.5rem;">
                    <option>All categories</option>
                    <option>Computers</option>
                    <option>Smartphones</option>
                    <option>TV, Video, Audio</option>
                    <option>Cameras</option>
                    <option>Headphones</option>
                    <option>Wearables</option>
                    <option>Printers</option>
                    <option>Video Games</option>
                    <option>Home Music</option>
                    <option>Data Storage</option>
                  </select>
                </div>
                <!-- Toolbar-->
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Toggle menu</span>
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div></a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                    <div class="navbar-tool-text ms-n3"><small>Salut, Sign in</small>Mon compte</div></a>
                  <div class="navbar-tool dropdown ms-3">
                      <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html">
                      <span class="navbar-tool-label">{{ Cart::getTotalQuantity() }}</span><i class="navbar-tool-icon ci-cart"></i></a>
                    <a class="navbar-tool-text" href="shop-cart.html"><small>My Cart</small>{{ number_format( \Cart::getTotal(), 0, ',', ' ') }}</a>
                    <!-- Cart dropdown-->
                    <div class="dropdown-menu dropdown-menu-end">
                      <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                        <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                          <div class="widget-cart-item pb-2 border-bottom">
                            <button class="btn-close text-danger" type="button" aria-label="Remove">
                                <span aria-hidden="true">&times;</span>
                            </button>

                           @foreach (\Cart::getContent() as $cart )
                           <div class="d-flex align-items-center">
                            <a class="d-block flex-shrink-0" href="shop-single-v2.html">
                            <img src="img/shop/cart/widget/05.jpg" width="64" alt="Product"></a>
                          <div class="ps-2">
                            <h6 class="widget-product-title">
                                <a href="shop-single-v2.html">{{ $cart->name }}</a></h6>
                            <div class="widget-product-meta">
                                <span class="text-accent me-2">{{ $cart->price }}<small></small></span>
                                <span class="text-muted">x {{ $cart->quantity }}</span>
                            </div>
                          </div>
                        </div>
                           @endforeach

                          </div>



                        </div>
                        <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                          <div class="fs-sm me-2 py-2">
                              <span class="text-muted">Total:</span>
                              <span class="text-accent fs-base ms-1">{{ number_format( \Cart::getTotal(), 0, ',', ' ') }}<small> FCFA</small></span>
                          </div>
                          <a class="btn btn-outline-secondary btn-sm" href="{{ route('cart.index') }}">Expand cart
                              <i class="ci-arrow-right ms-1 me-n1"></i>
                          </a>
                        </div>
                        <a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html">
                            <i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
              <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <!-- Search-->
                  <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded-start" type="text" placeholder="Search for products">
                  </div>
                  <!-- Departments menu-->
                  <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ci-menu align-middle mt-n1 me-2"></i>Departments</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-laptop opacity-60 fs-lg mt-n1 me-2"></i>Computers &amp; Accessories</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Computers</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Laptops &amp; Tablets</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Computers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer External Components</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer Internal Components</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Networking Products (NAS)</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Single Board Computers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Barebones</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Accessories</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Monitors</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags, Cases &amp; Sleeves</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Adapters</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cooling Pads</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Screens</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Security Locks</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stands</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/07.jpg" alt="Computers &amp; Accessories"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$149.<small>80</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-mobile opacity-60 fs-lg mt-n1 me-2"></i>Smartphones &amp; Tablets</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links mb-3">
                                  <h6 class="fs-base mb-3">Smartphones</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPhone</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Smartphones</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Phablets</a></li>
                                  </ul>
                                </div>
                                <div class="widget widget-links">
                                  <h6 class="fs-base">Tablets</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPad</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Tablets</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tablets with Keyboard</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Accessories</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessory Kits</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Battery Packs</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Car Accessories</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Power Adapters</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">FM Transmitters</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts &amp; Stands</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Parts</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Styluses</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/09.jpg" alt="Smartphones &amp; Tablets"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$127.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-monitor opacity-60 fs-lg mt-n1 me-2"></i>TV, Video &amp; Audio</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Television &amp; Video</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV Sets</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater Systems</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD Players &amp; Recorders</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Blue-ray Players &amp; Recorders</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">HD DVD Players &amp; Recorders</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD-VCR Combos</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DTV Converters</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Receivers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Amplifiers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projectors</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projection Screens</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satelite Television</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV-DTD Combos</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Systems</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Cinema Systems</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Streaming Media Players</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">VCRs</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Glasses</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/08.jpg" alt="TV, Video &amp; Audio"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$78.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-camera opacity-60 fs-lg mt-n1 me-2"></i>Cameras, Photo &amp; Video</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Cameras &amp; Lenses</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Point &amp; Shoot Digital Cameras</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DSLR Cameras</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mirrorless Cameras</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Body Mounted Cameras</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorders</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Lenses</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camera Lenses</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Macro &amp; Ringlight Flashes</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Shoe Mount Flashes</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tripods &amp; Monopods</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Studio</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Accessories</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags &amp; Cases</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Binoculars &amp; Scopes</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Chargers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Accessories</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Protector Foils</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Filters &amp; Accessories</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Remote Controls</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rain Covers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Viewfinders</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/10.jpg" alt="Cameras, Photo &amp; Video"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$210.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-earphones opacity-60 fs-lg mt-n1 me-2"></i>Headphones</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Headphones</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Earbud Headphones</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Over-Ear Headphones</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">On-Ear Headphones</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Headphones</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sports &amp; Fitness Headphones</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Noise-Cancelling Headphones</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Accessories</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cases &amp; Sleeves</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ear Pads</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/11.jpg" alt="Headphones"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$35.<small>99</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-watch opacity-60 fs-lg mt-n1 me-2"></i>Wearable Electronics</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Gadgets</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smartwatches</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Fitness Trackers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smart Glasses</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rings</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Virtual Reality</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Clips, Arm &amp; Wristbands</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/12.jpg" alt="Wearable Electronics"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$79.<small>50</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-printer opacity-60 fs-lg mt-n1 me-2"></i>Printers &amp; Ink</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links mb-3">
                                  <h6 class="fs-base mb-3">By type</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">All-in-One</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Copying</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Faxing</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printing</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Printing Only</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Scanning</a></li>
                                  </ul>
                                </div>
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Scanners</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Business Card Scanners</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Document Scanners</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Flatbed &amp; Photo Scanners</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Slide &amp; Negative Scanners</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base">Printers</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Dot Matrix Printers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Inkjet Printers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Label Printers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Laser Printers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wide Format Printers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Plotter Printers</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/13.jpg" alt="Printers &amp; Ink"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$54.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-joystick opacity-60 fs-lg mt-n1 me-2"></i>Video Games</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Games &amp; Hardware</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Games</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 4</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 3</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox One</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox 360</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo Switch</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii U</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PC</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mac</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo 3DS &amp; 2DS</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo DS</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation Vita</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sony PSP</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Retro Gaming</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Microconsoles</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Digital Games</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/14.jpg" alt="Video Games"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$19.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-speaker opacity-60 fs-lg mt-n1 me-2"></i>Speakers &amp; Home Music</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Speakers</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Speakers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bookshelf Speakers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ceiling &amp; In-Wall Speakers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Center-Channel Speakers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floorstanding Speakers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Outdoor Speakers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satellite Speakers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Bars</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Subwoofers</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Surround Sound Systems</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Home Audio</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wireless &amp; Streaming Audio</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stereo System Components</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Compact Radios &amp; Stereos</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Audio Accessories</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/16.jpg" alt="Speakers &amp; Home Music"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$43.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-server opacity-60 fs-lg mt-n1 me-2"></i>HDD/SSD Data Storage</a>
                          <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                              <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                  <h6 class="fs-base mb-3">Data Storage</h6>
                                  <ul class="widget-list">
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Hard Drives</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Solid State Drives</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Zip Drives</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floppy &amp; Tape Drives</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Hard Drives</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Solid State Drives</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Network Attached Storage</a></li>
                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">USB Flash Drives</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/15.jpg" alt="HDD/SSD Data Storage"></a>
                                <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$21.<small>60</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="ci-arrow-right fs-xs ms-1"></i></a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <!-- Primary menu-->
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link " href="/" >Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('register') }}" data-bs-auto-close="outside">S'inscrire</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#"  data-bs-auto-close="outside">Pages</a>

                    </li>


                  </ul>
                </div>
              </div>
            </div>

          </div>
        </header>



@yield('content')


   <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light mb-5">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-start mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" alt="Cartzilla"></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" width="20" alt="English">Eng / $</button>
                  <ul class="dropdown-menu my-1">
                    <li class="dropdown-item">
                      <select class="form-select form-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/fr.png" width="20" alt="Français">Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/it.png" width="20" alt="Italiano">Italiano</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-end mb-4">
              <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a></div><img class="d-inline-block" src="img/cards-alt.png" width="187" alt="Payment methods">
            </div>
          </div>
          <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendor/drift-zoom/dist/Drift.min.js') }}"></script>
    <script src="{{ asset('vendor/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('vendor/lg-video.js/dist/lg-video.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
  </body>
</html>
