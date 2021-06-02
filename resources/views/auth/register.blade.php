@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                    <div class="limiter">
                        <div class="container-login100">
                            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

                                <form action="{{ route('register') }}" method="POST" class="login100-form validate-form flex-sb flex-w">
                                    @csrf

                                    <span class="login100-form-title p-b-32">
                                                Registracija
                                            </span>

                                    <span class="txt1 p-b-11">
						                        Ime
					                        </span>
                                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Ime je obavezno">
                                        <input class="input100 @error('name') is-invalid @enderror" type="text" value=" {{ old('name') }}" name="name" >
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
                                        <input class="input100 @error('email') is-invalid @enderror" type="e-mail" value=" {{ old('email') }}" name="email" >
                                        <span class="focus-input100"></span>
                                    </div>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <span class="txt1 p-b-11">
                                               Grad
                                            </span>
                                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Grad je obavezno polje">

                                        <input class="input100 @error('city') is-invalid @enderror" type="text" value=" {{ old('city') }}" name="city" >
                                        <span class="focus-input100"></span>
                                    </div>
                                    @error('city')
                                    <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <span class="txt1 p-b-11">
                                               Ulica i broj
                                            </span>
                                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Ulica i broj je obavezno polje">

                                        <input class="input100 @error('address') is-invalid @enderror" type="text" value=" {{ old('address') }}" name="address" >
                                        <span class="focus-input100"></span>
                                    </div>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span><br>
                                    @enderror


                                    <span class="txt1 p-b-11">
                                               Drzava
                                            </span>
                                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Drzava je obavezno polje">

                                        <input class="input100 @error('state') is-invalid @enderror" type="text" value=" {{ old('state') }}" name="state" >
                                        <span class="focus-input100"></span>
                                    </div>
                                    @error('state')
                                    <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <span class="txt1 p-b-11">
                                               Broj telefona
                                            </span>
                                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Broj telefona je obavezno polje">

                                        <input class="input100 @error('mobile_number') is-invalid @enderror" type="text" value=" {{ old('mobile_number') }}" name="mobile_number" >
                                        <span class="focus-input100"></span>
                                    </div>
                                    @error('mobile_number')
                                    <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <span class="txt1 p-b-11">
                                               Šifra
                                            </span>
                                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Šifra je obavezno polje">

                                        <input class="input100 @error('password') is-invalid @enderror" type="password" value="" name="password" >
                                        <span class="focus-input100"></span>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <span class="txt1 p-b-11">
                                               Potvrdite šifru
                                            </span>
                                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Potvrda šifre je obavezno polje">

                                        <input class="input100 @error('password_confirmation') is-invalid @enderror" type="password" value="" name="password_confirmation" >
                                        <span class="focus-input100"></span>
                                    </div>
                                    @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autoc--}}
{{--                                            @error('password')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $message }}</strong>--}}
{{--                                                </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                                        <div class="col-md-6">--}}
{{--                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="container-login100-form-btn">
                                        <button type="submit" class="login100-form-btn">
                                            Registruj se
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>


                    <div id="dropDownSelect1"></div>
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Adresa') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>--}}

{{--                                @error('address')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Grad') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>--}}

{{--                                @error('city')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Država') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state" autofocus>--}}

{{--                                @error('state')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Broj telefona') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="number" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number" autofocus>--}}

{{--                                @error('mobile_number')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}

        </div>
    </div>
</div>
@endsection
