<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;


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
})->name('products.index');

// ruta para crear un nuevo productos
Route::get('/products/create', function(){
    return view('products.create');
})->name('products.create');

// ruta para guardar los datos del producto en la BD
Route::post('/products/save', function(Request $request){
    # return $request->all();
    # variables para guardar el registro en BD
    $newProduct = new Product;
    $newProduct->name = $request->input('name');
    $newProduct->description = $request->input('description');
    $newProduct->price = $request->input('price');
    $newProduct->stock = $request->input('stock');
    $newProduct->save();
})->name('products.save');
