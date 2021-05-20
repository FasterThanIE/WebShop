@extends('layouts.app2')

@section('content')


    <h2 class="text-center">Napravite vas oglas</h2>
<div class="container border border-dark rounded p-2">


    <form class="p-5" style="margin:auto;" action="SubjectController.php" method="post" enctype="multipart/form-data">

        <div>
            <b><p>Kategorija predmeta</p></b>

            <select name="category" class="selekt form-control mb-3"><br>
                <option value="0">-- Izaberite ovde --</option>
                <option value="0">Telefoni</option>
                <option value="0">Televizori</option>
                <option value="0">Laptopovi</option>

            </select>
        </div>
        <hr>
        <label for="name">Naziv predmeta</label>
        <input class="form-control w-50" type="text" name="name" placeholder="Upisite naziv predmeta"><br>
        <hr>
        <label for="name">Stanje predmeta</label><br>
        <input class="" type="radio" name="name"> Novo<br>
        <input class="" type="radio" name="name"> Polovno<br>
        <input class="" type="radio" name="name"> Neispravno<br><br>

        <hr>

        <p class=""><b>Opis predmeta</b></p>
        <textarea class="form-control w-75 m-auto " name="description" cols="20" rows="5">Upisite opis predmeta...</textarea><br>

        <hr>
        <b><p class="">Slike predmeta</p></b>
        <input type="file" name="image" class="form-control  w-50"><br><br>

        <hr>
        <label class="mb-2 font-weight-bold">Cena</label>
        <input class="form-control mb-3" type="number" name="price" placeholder="Unesite cenu"><br>

        <hr>
        <input type="checkbox" name="" value=""> Prihvatam pravila i uslove oglasavanja platforme MARKET <br><br>

        <hr>
        <div class="text-center "><input type="submit" name="create" value="UNESITE OGLAS" class="btn btn-success btn-lg mb-3"></div>


    </form>


</div>

@endsection





