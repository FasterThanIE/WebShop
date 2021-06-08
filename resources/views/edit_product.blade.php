@extends('layouts.app2')


@section('content')


    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <form action="{{ route('product.update') }}" method="POST"  enctype="multipart/form-data" class="login100-form validate-form flex-sb flex-w">
                    @csrf

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="/images/{{ $product->images[0]->image }}" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3 text-left">

                                    <h4>{{ $product->name }}</h4>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="row">
                            @foreach($product->images as $image)
                            <div class="col-sm-6 col-md-6 col-xl-6 text-center mb-2">
                                    <img style="width: 90%;" class="" width="" src="/images/{{$image->image}}" alt="">

                                <a href="{{ route('productImage.destroy', $image->id) }}">Obrisi</a>
                            </div>

                            @endforeach

                        </div>
                        <p class="mt-2">Unesite novu sliku:</p>
                        <input class="" type="file" name="images[]" multiple>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="limiter">
                                <div class="container-login100">
                                    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">



                                            <span class="login100-form-title p-b-32">
                                                Izmenite podatke proizvoda
                                            </span>

                                            <span class="txt1 p-b-11">
						                        Ime
					                        </span>
                                            <div class="wrap-input100 validate-input m-b-36" data-validate = "Ime je obavezno">
                                                <input class="input100 @error('name') is-invalid @enderror" type="text" value="{{ $product->name }}" name="name" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                        <input  type="hidden" name="product_id" value="{{ $product->id }}">

                                            <span class="txt1 p-b-11">
                                                    Kategorija
                                                </span>

                                            <div class="wrap-input100 validate-input m-b-36" data-validate = "Kategorija je obavezna">
                                                <select class="input100 @error('category') is-invalid @enderror" name="category" id="">
                                                    <span class="focus-input100"></span>
                                                    <option value="{{ $product->category->id }}" selected>{{ $product->category->name }}</option>

                                                @foreach($categories as $category)

                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('category')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                            <span class="txt1 p-b-11">
                                                Stanje predmeta
                                            </span>

                                            <div class="wrap-input100 validate-input m-b-12" data-validate = "stanje predmeta obavezno polje">


                                                    <select class="input100 @error('condition') is-invalid @enderror" name="condition" id="">
                                                        <option value="{{ $product->product_condition }}" selected>{{ $product->product_condition }}</option>
                                                        <option value="Novo" >Novo</option>
                                                        <option value="Polovno" >Polovno</option>
                                                        <option value="Neispravno" >Neispravno</option>
                                                    </select>
                                                    <span class="focus-input100"></span>

                                            </div>
                                            @error('condition')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                            <span class="txt1 p-b-11">
                                               Opis proizvoda
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-12" data-validate = "Opis predmeta je obavezno polje">

                                                <input class="input100 @error('description') is-invalid @enderror" type="text" value=" {{ $product->description }}" name="description" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('description')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                            <span class="txt1 p-b-11">
                                               Cena proizvoda
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-12" data-validate = "Cena proizvoda je obavezno polje">

                                                <input class="input100 @error('price') is-invalid @enderror" type="text" value=" {{ $product->price }}" name="price" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('price')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror


                                            <div class="container-login100-form-btn">
                                                <button type="submit" class="login100-form-btn">
                                                    Izmeni
                                                </button>
                                            </div>


                                    </div>
                                </div>
                            </div>


                            <div id="dropDownSelect1"></div>

                        </div>
                    </div>

                </div>
                </form>

            </div>

        </div>
    </div>

@endsection

