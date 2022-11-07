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



