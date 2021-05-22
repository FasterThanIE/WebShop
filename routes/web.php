<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');



Route::get('/novi-oglas', 'App\Http\Controllers\ProductController@index')->name('novi-oglas.index');
Route::post('/novi-oglas', 'App\Http\Controllers\ProductController@store')->name('novi-oglas.store');


Route::get('/admin/categories', 'App\Http\Controllers\CategoryController@index')->name('admin-categories');
Route::post('/admin/categories/post', 'App\Http\Controllers\CategoryController@store')->name('admin-categories-post');

Route::get('/admin/categories/edit', 'App\Http\Controllers\CategoryController@edit')->name('admin-categories-edit');
Route::get('/admin/categories/update', 'App\Http\Controllers\CategoryController@update')->name('admin-categories-update');



Route::get('/product-details', function () {
    return view('product-details');
});





Route::get('/search', function () {
    return view('search');
})->name('search');


Route::get('/admin', function () {

    if(isset(auth()->user()->is_admin) and (auth()->user()->is_admin)  == 2){
        return view('admin/home-admin');
    }else{
        return view('welcome');

    }
})->name('home-admin');


