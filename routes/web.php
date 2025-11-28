<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


// ruta para listar productos
Route::get('/products', function(){
    return view("products.index");
});

// ruta para crear un nuevo productos
Route::get('/products/create', function(){
    return view('products.create');
})->name('products.create');
