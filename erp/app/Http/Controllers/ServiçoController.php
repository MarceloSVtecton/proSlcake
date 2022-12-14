<?php

namespace App\Http\Controllers;
use App\Models\Serviço;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiçoController;
use Illuminate\Routing\Controller as BaseController;


class ServiçoController extends Controller
{
    public function index()
    {
        $serviço = Serviço::all();
        return view('serviços', compact('serviço'));

    }

    public function create()
    {
        $serviço = Serviço::all();
        return view('serviços_cadastrar', compact ('serviço'));
    
    }    

    public function store(Request $request)
    {   
    $input = [
        'os' => request('os'),
        'valor' => request('valor'), 
        'gastos' => request('gastos'), 
        'funilaria' => request('funilaria'), 
        'pintura' => request('pintura'),
        'preparação' => request('preparação'), 
        'montagem' => request('montagem'), 
        'polimento' => request('polimento'),
        'encerrada' => request('encerrada'),
        'peças' => request('peças'),
    ];
    Serviço::create($input);
    
    return redirect('serviços');

    }

    public function edit(Serviço $serviço)
    {
        return view('editserviços', 
        [
            'serviço' => $serviço
        ]);
    }

    public function update(Serviço $serviço, Request $request)
    {
    $input = [
        'os' => request('os'),
        'valor' => request('valor'), 
        'gastos' => request('gastos'), 
        'funilaria' => request('funilaria'), 
        'pintura' => request('pintura'),
        'preparação' => request('preparação'), 
        'montagem' => request('montagem'), 
        'polimento' => request('polimento'),
        'encerrada' => request('encerrada'),
        'peças' => request('peças'),
 
    ];
    $serviço->fill($input);
    $serviço->save();
    return redirect('serviços');

    }

    public function destroy(Serviço $serviço)
    {
    $serviço->delete();
    return redirect('serviços');

    }
}
