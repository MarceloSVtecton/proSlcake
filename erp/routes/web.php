<?php
namespace App;
use Illuminate\Support\Facades\Route ;
use App\Models\Serviço;
use App\Http\Controllers\ServiçoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProdutivoController;


/* Routes dos materiais */

Route::get('/', function(){
    return view('/products_home');
});

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/create', [ProductsController::class, 'create']);

Route::post('/products/store', [ProductsController::class, 'store']);

Route::put('/products/{products}/update', [ProductsController::class, 'update'])->name('products.update');

Route::get('/products/{products}/edit', [ProductsController::class, 'edit'])->name('products.edit');

Route::get('/products/{products}/delete', [ProductsController::class, 'destroy'])->name('products.destroy');



/*Routes dos produtivos*/




Route::get('/produtivos', [ProdutivoController::class, 'index']);

Route::get('/produtivo/create', [ProdutivoController::class, 'create']);

Route::post('/produtivo/store', [ProdutivoController::class, 'store']);

Route::get('/produtivo/{produtivo}/edit', [ProdutivoController::class, 'edit'])->name('produtivo.edit');

Route::put('/produtivo/{produtivo}/update', [ProdutivoController::class, 'update'])->name('produtivo.update');

Route::get('/produtivo/{produtivo}/delete', [ProdutivoController::class, 'destroy'])->name('produtivo.destroy');


/*Routes dos serviços*/



Route::get('/serviços', [ServiçoController::class, 'index']);

Route::get('/serviço/create', [ServiçoController::class, 'create']);

Route::post('/serviço/store', [ServiçoController::class, 'store']);

Route::get('/serviço/{serviço}/edit', [ServiçoController::class, 'edit'])->name('serviço.edit');

Route::put('/serviço/{serviço}/update', [ServiçoController::class, 'update'])->name('serviço.update');

Route::get('/serviço/{serviço}/delete', [ServiçoController::class, 'destroy'])->name('serviço.destroy');





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



