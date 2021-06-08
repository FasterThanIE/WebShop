<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateNewAdRequest;
use App\Http\Requests\ValidateProductUpdate;
use App\Http\Requests\ValidationProductImage;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use http\Env\Request;
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



    public function edit($uri)
    {
        $product = Product::findProductByUri($uri);
        $categories = Category::categories();

        return view('edit_product', ['product' => $product, 'categories' => $categories]);
    }


    public function update(ValidateProductUpdate $request)
    {
        $data = [];

        if($request->hasfile('images')){
            foreach ($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;

            }


            $product_id = Product::returnedProduct($request->product_id);

            $productImages = $data;

            foreach ($productImages as $value) {

                ProductImage::addProductImages($product_id, $value);
            }
        }



        Product::updateProduct($request->product_id, $request->category,
                                $request->name, $request->condition, $request->description, $request->price);

        return redirect()->back();


    }

    public function storeImage(ValidationProductImage $request)
    {
        $data = [];

        if($request->hasfile('images')){
            foreach ($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;

            }


        }
        $product_id = ProductImage::returnedProduct($request->product_id);

        $productImages = $data;

        foreach ($productImages as $value) {

            ProductImage::addProductImages($product_id, $value);
        }

        return redirect()->back();
    }


    public function destroy($id)
    {
        Product::destroyProduct($id);
        return redirect()->back();

    }

    public function destroyImage($id)
    {
        ProductImage::destroy($id);
        return redirect()->back();
    }


}
