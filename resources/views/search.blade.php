@extends('layouts.app2')

@section('content')
    <section class="slider-section pt-4 pb-4">
        <h3 class="text-center">Rezultati pretrage za:</h3>

        <div class="container">
            <div class="slider-inner">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="nav-category">
                            <h2>Categories</h2>
                            <ul class="menu-category">
                                <li><a href="#">Fashions</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Home and Kitchen</a></li>
                                <li><a href="#">Baby and Toys</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Digital Goods</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9">
                            <div class="single-product">
                                <div class="product-img">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <a href="{{url('/product-details')}}">
                                                <img width="300" src="./assets/img/products/p1.jpg" class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="d-inline-block">Naziv predmeta</h4>
                                            <h4>Cena: 4500, 00 RSD</h4>
                                            <p>Opis predmeta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <p>Postavljeno(pre 5 dana) | Beograd</p>
                                </div>
                            </div>
                        </div>
{{--                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">--}}
{{--                            <ol class="carousel-indicators">--}}
{{--                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
{{--                            </ol>--}}
{{--                            <div class="carousel-inner shadow-sm rounded">--}}
{{--                                <div class="carousel-item active">--}}
{{--                                    <img class="d-block w-100" src="./assets/img/slides/slide1.jpg" alt="First slide">--}}
{{--                                    <div class="carousel-caption d-none d-md-block">--}}
{{--                                        <h5>Mountains, Nature Collection</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="d-block w-100" src="./assets/img/slides/slide2.jpg" alt="Second slide">--}}
{{--                                    <div class="carousel-caption d-none d-md-block">--}}
{{--                                        <h5>Freedom, Sea Collection</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="d-block w-100" src="./assets/img/slides/slide3.jpg" alt="Third slide">--}}
{{--                                    <div class="carousel-caption d-none d-md-block">--}}
{{--                                        <h5>Living the Dream, Lost Island</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Slider -->--}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="products-grids trending pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mt-3">
                        <h2>Premium proizvodi</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{url('/product-details')}}">
                                <img src="./assets/img/products/p1.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
                                <img src="./assets/img/products/p2.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
                                <img src="./assets/img/products/p3.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
                                <img src="./assets/img/products/p4.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-apps pt-5 pb-3 border-top">
        <div class="container">

        </div><!-- container // -->
    </section>
@endsection


