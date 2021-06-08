@extends('layouts.app2')


@section('content')


    <h2 class="text-center">Napravite vas oglas</h2>
<div class="container border border-dark rounded p-2">

    <form class="p-5" style="margin:auto;" action="{{ url('/novi-oglas') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>

            <label for="category">Kategorije</label>
            <select name="kategorija" class="form-control mb-3 @error('kategorija') is-invalid @enderror"><br>
                <option value="0">-- Izaberite ovde --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach

            </select>
            @error('kategorija')
            <span class="text-danger">{{ $message }}</span><br>
            @enderror
        </div>
        <hr>

        <label for="name">Naziv predmeta</label>
        <input class="form-control w-50 @error('naziv') is-invalid @enderror" type="text" name="naziv" placeholder="Upisite naziv predmeta"><br>
        @error('naziv')
        <span class="text-danger">{{ $message }}</span><br>
        @enderror<br>
        <hr>

        <label for="stanje">Stanje predmeta</label><br>
        <input class="@error('stanje') is-invalid @enderror" type="radio" name="stanje" value="Novo"> Novo<br>
        <input class="" type="radio" name="stanje" value="Polovno"> Polovno<br>
        <input class="" type="radio" name="stanje" value="Neispravno"> Neispravno<br><br>
        @error('stanje')
        <span class="text-danger">{{ $message }}</span><br>
        @enderror<br>
        <hr>

        <p class=""><b>Opis predmeta</b></p>
        <textarea class="form-control w-75 m-auto @error('opis') is-invalid @enderror" name="opis" cols="20" rows="5" placeholder="Dodajte opis..."></textarea><br>
        @error('opis')
        <span class="text-danger">{{ $message }}</span><br>
        @enderror<br>
        <hr>
        <b><p class="">Slike predmeta</p></b>
        <input type="file" name="slike[]" multiple="multiple" class="form-control  w-50 @error('slike') is-invalid @enderror"><br>
        @error('slike')
        <span class="text-danger">{{ $message }}</span><br>
        @enderror<br>

        <hr>
        <label for="cena" class="mb-2 font-weight-bold">Cena</label>
        <input class="form-control mb-3 @error('cena') is-invalid @enderror" type="number" name="cena" placeholder="Unesite cenu">
        @error('cena')
        <span class="text-danger">{{ $message }}</span><br>
        @enderror<br>

        <hr>
        <input class="@error('pravila') is-invalid @enderror" type="checkbox" value="1" name="pravila" value=""> Prihvatam pravila i uslove oglasavanja platforme MARKET <br><br>
        @error('pravila')
        <span class="text-danger">{{ $message }}</span><br>
        @enderror<br>

        <hr>
        <button type="submit" class="btn btn-success btn-lg mb-3">UNESITE OGLAS</button>

    </form>


</div>

@endsection
