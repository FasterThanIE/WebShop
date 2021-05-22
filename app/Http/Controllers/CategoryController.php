<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Auth\Recaller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin/categories-admin');
    }

    public function store(Request $request)
    {

        $request->validate([
            'ime' => 'required',
        ]);

        Category::create(
            ['name' => $request->ime]
        );


        return redirect('/admin/categories')->with('status', "Uspesno ste uneli novu kategoriju.");

    }

    public function edit(Request $request)
    {
        $id = $request->category;

        $category = Category::find($id);
        dd($category);

        return view('admin/category_edit', ['category', $category]);
    }

    public function update()
    {

    }
}
