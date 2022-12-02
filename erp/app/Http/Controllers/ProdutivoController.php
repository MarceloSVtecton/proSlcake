<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Models\Produtivo;
use Illuminate\Http\Request;
use App\Http\Controllers\ProdutivoController;

class ProdutivoController extends Controller
{
    public function index()
    {
        $produtivo = Produtivo::all();
        return view('produtivos', compact('produtivo'));

    }

 public function create()
    {
        $produtivo = Produtivo::all();
        return view('produtivos_cadastrar', compact ('produtivo'));
    
    }    

public function store(Request $request)
{
    $input = [
        'nome' => request('nome'),
        'função' => request('função'),
       
    ];
    Produtivo::create($input);
    
    return redirect('produtivos');

}

public function edit(Produtivo $produtivo)
{
    return view('/produtivos_edit', 
    [
        'produtivo' => $produtivo
    ]);
}

public function update(Produtivo $produtivo, Request $request)
{
    $input = [
        'nome' => request('nome'),
        'função' => request('função'),
        
 
    ];
    $produtivo->fill($input);
    $produtivo->save();
    return redirect('produtivos');

}

public function destroy(Produtivo $produtivo)
{
    $produtivo->delete();
    return redirect('produtivos');

}


}
