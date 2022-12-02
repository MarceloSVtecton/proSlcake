<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('material', compact('products'));

    }

 public function create()
    {
        $products = Products::all();
        return view('newmaterial', compact ('products'));
    
    }    

public function store(Request $request)
{
    $input = [
        'nome' => request('nome'),
        'preço' => request('preço'),
        'estoque' => request('estoque'),
 
    ];
    Products::create($input);
    
    return redirect('products');

}

public function edit(Products $products)
{
    return view('/editmaterial', 
    [
        'products' => $products
    ]);
}

public function update(Products $products, Request $request)
{
    $input = [
        'nome' => request('nome'),
        'preço' => request('preço'),
        'estoque' => request('estoque'),
 
    ];
    $products->fill($input);
    $products->save();
    return redirect('products');

}

public function destroy(Products $products)
{
    $products->delete();
    return redirect('products');

}


}
