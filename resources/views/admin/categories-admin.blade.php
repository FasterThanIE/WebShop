@extends('layouts.admin')







@section('content')

<h1 class="text-center mb-5">Sve o kategorijama</h1>

@if (session('status'))
    <div class="alert alert-success text-center">
        {{ session('status') }}
    </div>

@endif

<div class="row text-center">
    <div class="col-12 col-sm-6 col-md-6 col-xl-4 mb-5 m-auto">

        <form action="{{ url('/admin/categories/post') }}" method="POST">
            @csrf
            <label for="category">Unesite novu kategoriju</label>
            <input class="form-control @error('ime') is-invalid @enderror" type="text" name="ime" placeholder="Unesite ime kategorije">
            @error('ime')
            <span class="text-danger">{{ $message }}</span><br>
            @enderror

            <button class="btn btn-primary mt-3" type="submit">Unesi</button>

        </form>

    </div>

    <div class="col-12 col-sm-6 col-md-6 col-xl-4 mb-5 m-auto">

        <form action="{{url('/admin/categories/edit')}}" method="GET">

        <label for="category">Izmenite kategoriju</label>
        <select name="category" class="form-control mb-3"><br>
            <option value="0">-- Izaberite ovde --</option>
            <option value="1">Telefoni</option>
            <option value="2">Televizori</option>
            <option value="3">Laptopovi</option>
        </select>

            <button class="btn btn-primary" type="submit">Izaberi</button>

        </form>

    </div>

    <div class="col-12 col-sm-6 col-md-6 col-xl-4 mb-5 m-auto">

        <form action="">

            <label for="category">Obrisite kategoriju</label>
            <select name="category" class="selekt form-control mb-3"><br>
                <option value="0">-- Izaberite ovde --</option>
                <option value="0">Telefoni</option>
                <option value="0">Televizori</option>
                <option value="0">Laptopovi</option>
            </select>
            <button class="btn btn-primary" type="submit">Obrisi</button>

        </form>

    </div>
</div>


@endsection

