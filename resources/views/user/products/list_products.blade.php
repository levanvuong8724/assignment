@extends('user.layouts.index')



@push('styles')
    <style>
.roww {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.roww form {
  display: flex;
  align-items: center;
}

.roww select {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
  color: #333;
  font-size: 16px;
  padding: 8px 12px;
  cursor: pointer;
}

.roww select:focus {
  outline: none;
  border-color: #66afe9;
  box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
}

.roww select option {
  background-color: #fff;
  color: #333;
}
    </style>
@endpush
@section('content')
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Trade-in offer</h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand">On all products</h1>
                                    <p class="animated">Save more with coupons & up to 70% off</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="product-details.html"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="assets/imgs/slider/slider-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-7">Great Collection</h1>
                                    <p class="animated">Save more with coupons & up to 20% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="product-details.html"> Discover Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="assets/imgs/slider/slider-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>

        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one"
                                type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two"
                                type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three"
                                type="button" role="tab" aria-controls="tab-three" aria-selected="false">New
                                added</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i
                            class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                          
                            <div class="row">
                                
                                @foreach ($products as $key => $value)
                                    <a href="">
                                        <div class="product bg-white p-4 text-center shadow-md">
                                            <img src="{{ asset($value->image) }}" alt="" width="200px"
                                                height="200px">
                                            <div class="d-inline-block">
                                                <h4 class="fw-bolder fs-5 mt-4">{{ $value->name }}</h4>
                                                <span class="fw-bolder fs-4">{{ $value->price }}$</span>
                                            </div>
                                            <div class="d-inline-block mt-3">
                                                <button class="btn btn-primary px-5">Mua ngay</button>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                            <!--End product-grid-4-->
                        </div>
                        <!--En tab one (Featured)-->

                        <!--En tab two (Popular)-->

                        <!--En tab three (New added)-->
                    </div>
                    <!--End tab-content-->
                </div>
        </section>

        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Woman Bag</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="assets/imgs/banner/banner-3.png" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="banner-2 section-padding pb-0">
        <div class="container">
            <div class="banner-img banner-big wow fadeIn animated f-none">
                <img src="assets/imgs/banner/banner-4.png" alt="">
                <div class="banner-text d-md-block d-none">
                    <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                    <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                    <a href="shop.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section> --}}
        {{-- <section class="popular-categories section-padding mt-15 mb-25">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                <div class="carausel-6-columns" id="carausel-6-columns">
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="assets/imgs/shop/category-thumb-1.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">T-Shirt</a></h5>
                    </div>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"> <img src="assets/imgs/shop/category-thumb-2.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">Bags</a></h5>
                    </div>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="assets/imgs/shop/category-thumb-3.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">Sandan</a></h5>
                    </div>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="assets/imgs/shop/category-thumb-4.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">Scarf Cap</a></h5>
                    </div>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="assets/imgs/shop/category-thumb-5.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">Shoes</a></h5>
                    </div>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="assets/imgs/shop/category-thumb-6.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">Pillowcase</a></h5>
                    </div>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="assets/imgs/shop/category-thumb-7.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">Jumpsuits</a></h5>
                    </div>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="assets/imgs/shop/category-thumb-8.jpg" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">Hats</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Lorem ipsum dolor</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$238.85 </span>
                                <span class="old-price">$245.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Aliquam posuere</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$173.85 </span>
                                <span class="old-price">$185.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Sed dapibus orci</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$215.85 </span>
                                <span class="old-price">$235.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">.33%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Donec congue</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$83.8 </span>
                                <span class="old-price">$125.2</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">-25%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Curabitur porta</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$1238.85 </span>
                                <span class="old-price">$1245.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Praesent maximus</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$123 </span>
                                <span class="old-price">$156</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Vestibulum ante</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$238.85 </span>
                                <span class="old-price">$245.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section> --}}

        {{-- <section class="section-padding">
        <div class="container">
            <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
            <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="assets/imgs/banner/brand-1.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="assets/imgs/banner/brand-2.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="assets/imgs/banner/brand-4.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="assets/imgs/banner/brand-5.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="assets/imgs/banner/brand-6.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    </main>
@endsection

@push('scripts')
    <script></script>
@endpush
