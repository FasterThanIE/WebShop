<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateNewAdRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::all();

        return view('novi-oglas', ['categories' => $categories]);
    }

    /**
     * @param ValidateNewAdRequest $request
     * return null
     */
    public function store(ValidateNewAdRequest $request)
    {
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
