
@extends('layouts.app2')


@section('content')

<section class="breadcrumb-section pb-3 pt-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </section>
    <section class="product-page pb-4 pt-4">
        <div class="container">
            <div class="row product-detail-inner">
                <div class="col-lg-6 col-md-6 col-12">
                    <div id="product-images" class="carousel slide" data-ride="carousel">
                        <!-- slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="assets/img/products/1.jpg" alt="Product 1"> </div>
                            <div class="carousel-item"> <img src="assets/img/products/2.jpg" alt="Product 2"> </div>
                            <div class="carousel-item"> <img src="assets/img/products/3.jpg" alt="Product 3"> </div>
                            <div class="carousel-item"> <img src="assets/img/products/4.jpg" alt="Product 4"> </div>
                        </div> <!-- Left right -->
                        <a class="carousel-control-prev" href="#product-images" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#product-images" data-slide="next"> <span class="carousel-control-next-icon"></span> </a><!-- Thumbnails -->
                        <ol class="carousel-indicators list-inline">
                            <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#product-images"> <img src="assets/img/products/1.jpg" class="img-fluid"> </a> </li>
                            <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#product-images"> <img src="assets/img/products/2.jpg" class="img-fluid"> </a> </li>
                            <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#product-images"> <img src="assets/img/products/3.jpg" class="img-fluid"> </a> </li>
                            <li class="list-inline-item"> <a id="carousel-selector-3" data-slide-to="3" data-target="#product-images"> <img src="assets/img/products/4.jpg" class="img-fluid"> </a> </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="product-detail">
                        <h2 class="product-name">Casual Shirt With Ruffle Hem</h2>
                        <div class="product-price">
                            <span class="price">Cena: 299, 00</span>
                        </div>
                        <div class="product-short-desc">
                            <p>Compact sport shoe for running, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat
                                </p>

                        </div>
                        <h4>Prodavac: <a href="#">Dusan</a> </h4>
                        <p>Mesto: Beograd</p>
                        <a href="#">Pogledajte sve oglase oglasivaca</a><br><br>
                        <a data-toggle="modal" data-target="#modalContactForm" class="btn btn-dark" href="#">Pošaljite poruku</a><br><br>

{{--                        modal for messeging--}}
                        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Kontaktirajte prodavca</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form">
                                            <i class=""></i>
                                            <input type="text" id="form34" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="form34">Your name</label>
                                        </div>

                                        <div class="md-form">
                                            <i class=""></i>
                                            <input type="email" id="form29" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="form29">Your email</label>
                                        </div>

                                        <div class="md-form">
                                            <i class=""></i>
                                            <input type="text" id="form32" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="form32">Subject</label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fa fa-pencil"></i>
                                            <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                                            <label data-error="wrong" data-success="right" for="form8">Your message</label>
                                        </div>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-outline-dark">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>

{{--                        <div class="product-select">--}}
{{--                            <form>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Size</label>--}}
{{--                                    <select class="form-control">--}}
{{--                                        <option>-- Size --</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Color</label>--}}
{{--                                    <select class="form-control">--}}
{{--                                        <option>-- Color --</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-3">--}}
{{--                                        <input type="number" class="form-control" value="1"/>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-5">--}}
{{--                                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <a href="#" class="btn btn-secondary"><i class="fa fa-heart-o"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                        <div class="product-categories">
                            <ul>
                                <li class="categories-title">Categories :</li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">electronics</a></li>
                                <li><a href="#">toys</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">jewellery</a></li>
                            </ul>
                        </div>
                        <div class="product-tags">
                            <ul>
                                <li class="categories-title">Tags :</li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">electronics</a></li>
                                <li><a href="#">toys</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">jewellery</a></li>
                            </ul>
                        </div>
                        <div class="product-share">
                            <ul>
                                <li class="categories-title">Share :</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-details">
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <div class="review-form">
                                            <h3>Write a review</h3>
                                            <form>
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <input type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Review</label>
                                                    <textarea cols="4" class="form-control"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="other-products pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
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
@endsection
