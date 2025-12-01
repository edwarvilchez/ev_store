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

# controlammos los accesos y registros de los usuarios
Route::middleware('auth')->group(function(){

        // ruta para listar productos
    Route::get('/products', function(){
        $products = Product::orderBy('created_at', 'desc')->get();
        return view("products.index", compact('products'));
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

    // retornamos a la ruta por defecto
        return redirect()->route('products.index')->with('info', 'Producto Creado exitosamente');
    })->name('products.save');

    // ruta para eliminar un producto por su id
    Route::delete('products/{id}', function($id){
        $product = Product::findOrFail($id);
        // return $product;
        $product->delete();
        return redirect()->route('products.index')->with('info', 'Producto Eliminado exitosamente');
    })->name('products.destroy');

    // ruta para editar el producto
    Route::get('products/{id}/edit', function($id){
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    })->name('products.edit');


    // ruta para actualizar el producto
    Route::put('/products/{id}', function(Request $request, $id){
        //return $request->all();
        $product = Product::findOrFail($id);
        //return $product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->save();
        return redirect()->route('products.index')->with('info', 'Producto Actualizado exitosamente');
    })->name('products.update');


});



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
