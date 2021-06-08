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


Route::get('/', 'App\Http\Controllers\UserController@index')->name('welcome');

Route::get('profil/{uri}', 'App\Http\Controllers\UserController@show')->name('profile.show');

Route::group(['middleware' => 'auth'], function(){

    Route::get('moj-profil/{uri}', 'App\Http\Controllers\UserController@myProfileShow')->name('myProfile.show');
    Route::get('izmeni-profil', 'App\Http\Controllers\UserController@edit')->name('profile.edit');
    Route::post('izmeni-profil', 'App\Http\Controllers\UserController@update')->name('profile.update');


    Route::get('izmeni-proizvod/{uri}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
    Route::post('izmeni-proizvod', 'App\Http\Controllers\ProductController@update')->name('product.update');
    Route::delete('obrisi-proizvod/{id}', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');

    Route::post('unesi-sliku', 'App\Http\Controllers\ProductController@storeImage')->name('product-image.store');
    Route::get('brisi-proizvod-sliku/{id}', 'App\Http\Controllers\ProductController@destroyImage')->name('productImage.destroy');


    Route::get('/novi-oglas', 'App\Http\Controllers\ProductController@index')->name('novi-oglas.index');
    Route::post('/novi-oglas', 'App\Http\Controllers\ProductController@store')->name('novi-oglas.store');

Route::group(['middleware' => \App\Http\Middleware\AdminMiddleware::class], function (){
        Route::get('/admin', function () {
            return view('admin/home-admin');
        })->name('home-admin');

        Route::get('/admin/categories', 'App\Http\Controllers\CategoryController@index')->name('admin-categories');
        Route::post('/admin/categories/post', 'App\Http\Controllers\CategoryController@store')->name('admin-categories-post');
        Route::get('/admin/categories/edit', 'App\Http\Controllers\CategoryController@edit')->name('admin-categories-edit');
        Route::get('/admin/categories/update', 'App\Http\Controllers\CategoryController@update')->name('admin-categories-update');

    });
});


Route::view('/contact', 'contact')->name('contact');

Route::get('/product-details', function () {
    return view('product-details');
});


Route::get('/search', function () {
    return view('search');
})->name('search');





