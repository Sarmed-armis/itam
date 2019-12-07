@extends('layouts.website.mainwarpper')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="home-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">
                        <div class="home-slide">
                            <div class="owl-lazy slide-bg" data-src="{{asset('assets/images/slider/slide-1.jpg')}}"></div>
                            <div class="home-slide-content text-white">
                                <h3>Get up to <span>60%</span> off</h3>
                                <h1>Summer Sale</h1>
                                <p>Limited items available at this price.</p>
                                <a href="category.html" class="btn btn-dark">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide">
                            <div class="owl-lazy slide-bg" data-src="{{asset('assets/images/slider/slide-2.jpg')}}"></div>
                            <div class="home-slide-content">
                                <h3>OVER <span>200+</span></h3>
                                <h1>GREAT DEALS</h1>
                                <p>While they last!</p>
                                <a href="category.html" class="btn btn-dark">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide">
                            <div class="owl-lazy slide-bg" data-src="{{asset('assets/images/slider/slide-3.jpg')}}"></div>
                            <div class="home-slide-content">
                                <h3>up to <span>40%</span> off</h3>
                                <h1>NEW ARRIVALS</h1>
                                <p>Starting at $9</p>
                                <a href="category.html" class="btn btn-dark">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->
                    </div><!-- End .home-slider -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-1.jpg')}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-2.jpg')}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-3.jpg')}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->

                    <div class="mb-3"></div><!-- margin -->

                    <h2 class="carousel-title">Featured Products</h2>

                    <div class="home-featured-products owl-carousel owl-theme owl-dots-top">
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/products/home-featured-1.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/products/home-featured-2.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html)}}" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/products/home-featured-3.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/products/home-featured-4.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html)}}" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/products/home-featured-5.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="{{asset('ajax/product-quick-view.html')}}" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .featured-proucts -->

                    <div class="mb-6"></div><!-- margin -->

                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="product-column">
                                <h3 class="title">New</h3>

                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/home-featured-3.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/home-featured-4.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/small/product-1.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .product-column -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product-column">
                                <h3 class="title">Hot</h3>

                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/home-featured-1.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/home-featured-2.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/home-featured-5.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .product-column -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product-column">
                                <h3 class="title">Sale</h3>

                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/home-featured-4.jpg)}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/small/product-1.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/home-featured-3.jpg')}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .product-column -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->

                    <div class="mb-3"></div><!-- margin -->

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-star"></i>

                                <div class="feature-box-content">
                                    <h3>Dedicated Service</h3>
                                    <p>Consult our specialists for help with an order, customization, or design advice</p>
                                    <a href="#" class="btn btn-outline-dark">Get in touch</a>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-sm-6 col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-reply"></i>

                                <div class="feature-box-content">
                                    <h3>Free Returns</h3>
                                    <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                                    <a href="#" class="btn btn-outline-dark">Return Policy</a>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-sm-6 col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-paper-plane"></i>

                                <div class="feature-box-content">
                                    <h3>International Shipping</h3>
                                    <p>Currently over 50 countries qualify for express international shipping.</p>
                                    <a href="#" class="btn btn-outline-dark">Lear More</a>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-9 -->

                <aside class="sidebar-home col-lg-3 order-lg-first">
                    <div class="side-menu-container">
                        <h2>CATEGORIES</h2>

                        <nav class="side-nav">
                            <ul class="menu menu-vertical sf-arrows">
                                <li class="active"><a href="index.html"><i class="icon-home"></i>Home</a></li>
                                <li>
                                    <a href="category.html" class="sf-with-ul"><i class="icon-briefcase"></i>
                                        pages</a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="menu-title">
                                                            <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                                        </div>
                                                        <ul>

                                                        </ul>
                                                    </div><!-- End .col-lg-6 -->

                                                </div><!-- End .row -->
                                            </div><!-- End .col-lg-8 -->
                                            <div class="col-lg-4">
                                                <div class="banner">
                                                    <a href="#">
                                                        <img src="assets/images/menu-banner-2.jpg)}}" alt="Menu banner">
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-lg-4 -->
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a href="product.html" class="sf-with-ul"><i class="icon-video"></i>Products</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                            <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="product.html">Inner Zoom</a></li>
                                                            <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                            <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                            <li><a href="product-simple.html">Simple Product</a></li>
                                                            <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Product Layout Types</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product.html">Default Layout</a></li>
                                                            <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                                            <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                            <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                                            <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .col-lg-8 -->
                                            <div class="col-lg-4">
                                                <div class="banner">
                                                    <a href="#">
                                                        <img src="{{asset('assets/images/menu-banner.jpg')}}" alt="Menu banner" class="product-promo">
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-lg-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul"><i class="icon-docs-inv"></i>Categories</a>

                                    <ul>
                                        @foreach($cats as $cat)
                                            <li><a href="{{url('cat/'.$cat->name)}}">{{$cat->name}}</a></li>
                                        @endforeach
                                        <li><a href="#">Checkout</a>
                                            <ul>
                                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                                <li><a href="checkout-review.html">Checkout Review</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dashboard</a>
                                            <ul>
                                                <li><a href="dashboard.html">Dashboard</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#" class="sf-with-ul"><i class="icon-sliders"></i>Features</a>
                                    <ul>
                                        <li><a href="#">Header Types</a></li>
                                        <li><a href="#">Footer Types</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon-cat-gift"></i>Special Offer!</a></li>
                                <li><a href="https://1.envato.market/DdLk5" target="_blank"><i class="icon-star-empty"></i>Buy Porto!</a></li>
                            </ul>
                        </nav>
                    </div><!-- End .side-menu-container -->
                    <div class="widget widget-banners">
                        <div class="widget-banners-slider owl-carousel owl-theme">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-sidebar.jpg')}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-sidebar-2.jpg')}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .banner-slider -->
                    </div><!-- End .widget -->

                    <div class="widget widget-newsletters">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Get all the latest information on Events, Sales and Offers. </p>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" id="wemail">
                                <label for="wemail"><i class="icon-envolope"></i>Email Address</label>
                            </div><!-- Endd .form-group -->
                            <input type="submit" class="btn btn-block" value="Subscribe Now">
                        </form>
                    </div><!-- End .widget -->

                    <div class="widget widget-testimonials">
                        <div class="widget-testimonials-slider owl-carousel owl-theme">
                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="{{asset('assets/images/clients/client1.png')}}" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">john Smith</h4>
                                        <span>CEO &amp; Founder</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                                </blockquote>
                            </div><!-- End .testimonial -->

                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="assets/images/clients/client2.png)}}" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">Dae Smith</h4>
                                        <span>Co-founder</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                                </blockquote>
                            </div><!-- End .testimonial -->
                        </div><!-- End .testimonials-slider -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <div class="widget-posts-slider owl-carousel owl-theme">
                            <div class="post">
                                <span class="post-date">01- Jun -2018</span>
                                <h4 class="post-title"><a href="#">Fashion News</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
                            </div><!-- End .post -->

                            <div class="post">
                                <span class="post-date">22- May -2018</span>
                                <h4 class="post-title"><a href="#">Shopping News</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non plasasyi. </p>
                            </div><!-- End .post -->

                            <div class="post">
                                <span class="post-date">13- May -2018</span>
                                <h4 class="post-title"><a href="#">Fashion News</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat. </p>
                            </div><!-- End .post -->
                        </div><!-- End .posts-slider -->
                    </div><!-- End .widget -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
        <div class="mb-4"></div><!-- margin -->
@endsection
