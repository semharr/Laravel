<?php

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
use \App\Product;

Route::get('/', function () {
    return "hallo";
});
Route::get('/products', 'Productcontroller@index');
   
   Route::get('/artikl/{id}', function ($id) {
    return Product ::find($id);

});
