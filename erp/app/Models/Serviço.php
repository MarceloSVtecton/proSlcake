<?php

namespace App\Models;

use App\Models\Serviço;

use App\Models\Products;
use App\Models\Produtivo;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ServiçoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serviço extends Model
{
    use HasFactory;
    protected $fillable = [
        'os',
        'valor', 
        'gastos', 
        'funilaria', 
        'pintura',
        'preparação', 
        'montagem', 
        'polimento',
        'encerrada',
        'peças',
    ];

    public function products(){
        return $this->hasMany(Products::class);
    }

    public function produtivo(){
        return $this->hasMany(Produtivo::class);
    }
}
