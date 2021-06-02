<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateNewAdRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
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


        // Add product to product table
        $product = Product::addProduct($request->naziv, $request->kategorija,
                                       $request->stanje, $request->opis, $request->cena);


        $productImages = $request->slike;

        foreach ($productImages as $value) {

            ProductImage::addProductImages($product->id, $value);

        }

        return redirect('/')->with('status', 'Uspesno ste uneli oglas!');
    }
}
