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
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3 text-left">

                                    <h4>{{ $user->name }}</h4>
                                    {{--                                    <p class="text-secondary mb-1">Full Stack Developer</p>--}}
                                    <p class="text-muted font-size-sm d-inline-block"> {{ $user->email }} </p><br>
                                    <p class="text-muted font-size-sm d-inline-block"> {{ $user->userInfo->city }} </p><br>
                                    <p class="text-muted font-size-sm d-inline-block"> {{ $user->userInfo->address }} </p><br>
                                    <p class="text-muted font-size-sm d-inline-block"> {{ $user->userInfo->mobile_number }} </p>
                                    <br>
                                    <a href="{{ route('profile.edit', $user) }}" class="font-weight-300 text-danger btn btn-info">Izmeni svoje podatke</a>
                                    {{--                                    <button class="btn btn-primary">Follow</button>--}}
                                    {{--                                    <button class="btn btn-outline-primary">Message</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                <span class="text-secondary">https://bootdey.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                <span class="text-secondary">@bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="limiter">
                                <div class="container-login100">
                                    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

                                        <form action="{{ route('profile.update') }}" method="POST" class="login100-form validate-form flex-sb flex-w">
                                            @csrf

                                            <input type="hidden" name="user_id" value=" {{ $user->id }}">

                                            <span class="login100-form-title p-b-32">
                                                Izmenite podatke
                                            </span>

                                            <span class="txt1 p-b-11">
						                        Ime
					                        </span>
                                            <div class="wrap-input100 validate-input m-b-36" data-validate = "Ime je obavezno">
                                                <input class="input100 @error('name') is-invalid @enderror" type="text" value=" {{ $user->name }}" name="name" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                            <span class="txt1 p-b-11">
                                                E-mail
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-12" data-validate = "E-mail je obavezno polje">
{{--                                                <span class="btn-show-pass">--}}
{{--                                                    <i class="fa fa-eye"></i>--}}
{{--                                                </span>--}}
                                                <input class="input100 @error('email') is-invalid @enderror" type="e-mail" value=" {{ $user->email }}" name="email" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                            <span class="txt1 p-b-11">
                                               Grad
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-12" data-validate = "Grad je obavezno polje">

                                                <input class="input100 @error('city') is-invalid @enderror" type="text" value=" {{ $user->userInfo->city }}" name="city" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('city')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                            <span class="txt1 p-b-11">
                                               Ulica i broj
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-12" data-validate = "Ulica i broj je obavezno polje">

                                                <input class="input100 @error('address') is-invalid @enderror" type="text" value=" {{ $user->userInfo->address }}" name="address" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('address')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror


                                            <span class="txt1 p-b-11">
                                               Država
                                            </span>
                                            <div class="wrap-input100 m-b-12" data-validate = "Država je obavezno polje">

                                                <input class="input100 @error('state') is-invalid @enderror" type="text" value=" {{ $user->userInfo->state }}" name="state" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('state')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

                                            <span class="txt1 p-b-11">
                                               Broj telefona
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-12" data-validate = "Broj telefona je obavezno polje">

                                                <input class="input100 @error('mobile_number') is-invalid @enderror" type="text" value=" {{ $user->userInfo->mobile_number }}" name="mobile_number" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            @error('mobile_number')
                                            <span class="text-danger">{{ $message }}</span><br>
                                            @enderror

{{--                                            <div class="flex-sb-m w-full p-b-48">--}}
{{--                                                <div class="contact100-form-checkbox">--}}
{{--                                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">--}}
{{--                                                    <label class="label-checkbox100" for="ckb1">--}}
{{--                                                        Remember me--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}

{{--                                                <div>--}}
{{--                                                    <a href="#" class="txt3">--}}
{{--                                                        Forgot Password?--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                            <div class="container-login100-form-btn">
                                                <button type="submit" class="login100-form-btn">
                                                    Izmeni
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>


                            <div id="dropDownSelect1"></div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

