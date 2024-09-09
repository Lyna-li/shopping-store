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
// home page
Route::get('/', function () {
    return view('pages.home');
});
// shopping page
Route::get('/Shopping', function () {
    return view('pages.shopping');
});
// Contect_us page
Route::get('/Contact', function () {
    return view('pages.contact_us');
});
// about_us page
Route::get('/About', function () {
    return view('pages.about');
});
Route::get('/signin', function () {
    return view('pages.signin');
});
Route::get('/signup', function () {
    return view('pages.signup');
});


Route::get('/payment', function () {
    return view('pages.payment');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/femme', function () {
    return view('pages.femme');
});

Route::get('/hijab1', function () {
    return view('pages.hijab1');
});
Route::get('/homme', function () {
    return view('pages.homme');
});
Route::get('/tshirt1', function () {
    return view('pages.tshirt');
});

