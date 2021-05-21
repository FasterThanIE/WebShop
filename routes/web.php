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


Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');


Route::get('/novi-oglas', function () {
    return view('novi-oglas');
});

Route::get('/search', function () {
    return view('search');
});


Route::get('/admin', function () {
    return view('admin/home-admin');
});




Route::get('/product-details', function () {
    return view('product-details');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
