<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('novi-oglas', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategorija' => 'required|not_in:0',
            'naziv' => 'required',
            'stanje' => 'required',
            'opis' => 'required',
            'slike' => 'required',
            'cena' => 'required',
            'pravila' => 'required_without_all'
        ]);


        if($request->hasfile('slike')){

            foreach ($request->file('slike') as $image){

                $name = $image->getClientOriginalName();


                $image->move(public_path().'/images/', $name);
                $data[] = $name;

            }
        }

        $json = json_encode($data);


         Product::create([
            'name' => $request->naziv,
            'category_id' => $request->kategorija,
            'product_condition' => $request->stanje,
            'description' => $request->opis,
            'images' => $json,
            'price' => $request->cena,

        ]);


        dd('ubaceno');
    }
}
