<?php

namespace App\Http\Controllers;

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

}
