<?php
namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductsController
};

Route::get('/', function(){
    return view('/products_home');
});

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/create', [ProductsController::class, 'create']);

Route::post('/products/store', [ProductsController::class, 'store']);

Route::get('/products/{products}/edit', [ProductsController::class, 'edit'])->name('products.edit');

Route::put('/products/{products}/update', [ProductsController::class, 'update'])->name('products.update');

Route::get('/products/{products}/delete', [ProductsController::class, 'destroy'])->name('products.destroy');



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



