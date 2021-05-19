@extends('layouts.app2')

@section('content')


    <h2 class="text-center">Napravite vas oglas</h2>
<div class="container border rounded p-2">


    <form class="p-5" style="margin:auto;" action="SubjectController.php" method="post" enctype="multipart/form-data">

        <label for="name">Kategorija</label>
        <input class="form-control w-50" type="text" name="kategorija"><br>

        <label for="name">Naziv oglasa</label>
        <input class="form-control w-50" type="text" name="name"><br>


        <p class=""><b>Opis predmeta</b></p>
        <textarea class="form-control w-75 m-auto " name="description" cols="20" rows="5"></textarea><br>


        <b><p class="">Slika predmeta</p></b>
        <input type="file" name="image" class="form-control  w-50"><br><br>

        <div>
            <b><p>Odredite kategoriju predmeta</p></b>
            <select name="category" class="selekt form-control mb-3"><br>
                <option value="0">Izaberite ovde</option>

            </select>

        </div>
        <br><br>

        <h5>Nacin placanja i dostave</h5><br>


        <div style="margin:auto;" class="row text-center">

            <div class="col-5">

                <b><p>Nacin placanja</p></b>
                <input type="checkbox" name="payment[]" value="Tekuci racun(pre slanja)" class="form-check-input">
                <label for="">Tekuci racun(pre slanja)</label><br>
                <input type="checkbox" name="payment[]" value="PostNet(pre slanja)"  class="form-check-input">
                <label for="">postNet(pre slanja)</label><br>
                <input type="checkbox" name="payment[]" value="Pouzecem" class="form-check-input">
                <label for="">Pouzecem</label><br>
                <input type="checkbox" name="payment[]" value="Licno" class="form-check-input">
                <label for="">Licno</label><br>


            </div>

            <div class="col-5 text-center">

                <b><p>Nacin isporuke</p></b>
                <input type="checkbox" name="delivery[]" value="AKS" class="form-check-input">
                <label for="">AKS</label><br>
                <input type="checkbox" name="delivery[]" value="BEKS"  class="form-check-input">
                <label for="">BEKS</label><br>
                <input type="checkbox" name="delivery[]" value="City Express" class="form-check-input">
                <label for="">City Express</label><br>
                <input type="checkbox" name="delivery[]" value="Posta" class="form-check-input">
                <label for="">Posta</label><br>

            </div>


        </div>
        <br><br>

        <h5 class="text-center">Postavi aukciju</h5><br>

        <div class="row w-75 m-auto">

            <div class="col-sm-5">
                <label class="mb-2 font-weight-bold">Pocetna cena</label>
                <input class="form-control mb-3" type="number" name="starting_price" placeholder="Unesite cenu">

            </div>

            <div class="col-sm-5">
                <b> <label>Trajanje aukcije</label></b>
                <input type="date" value="" name="duration" class=" form-control m-auto">

            </div>


        </div>
        <br><br>

        <div class="text-center "><input type="submit" name="create" value="POKRENI" class="btn btn-success btn-lg  mb-3"></div>


    </form>

</div>

@endsection





