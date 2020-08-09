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


Route::get('/', function () {
    return view('home');
});
Route::get('/user', function () {
    return view('home');
});
Route::get('/index', function () { 
    return view('index');
});
Route::get('/wish-list', function () {
    return view('wish-list');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/store', function () {
    return view('store');
});
Route::get('/stores', function () {
    return view('stores');
});
Route::get('/records', function () {
    return view('records');
});
Route::get('/shipping-data', function () {
    return view('shipping-data');
});
Route::get('/seller-account', function () {
    return view('seller-account');
});
Route::get('/search-products', function () {
    return view('search-products');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/order-details', function () {
    return view('order-details');
});
Route::get('/cat-single', function () {
    return view('cat-single');
});
Route::get('/cat', function () {
    return view('cat');
});
Route::get('/my-orders', function () {
    return view('my-orders');
});
Route::get('/my-products', function () {
    return view('my-products');
});
Route::get('/add-products', function () {
    return view('add-products');
});

Route::get('/test', 'testController@index');


// Nav
Route::get('/register', function () {
    return view('user-account');
});
// create user account
Route::post('createUser', 'UserAccountController@store');










Route::get('/seller/register','seller\SellersController@register');
Route::get('/seller/login','seller\SellersController@login');
