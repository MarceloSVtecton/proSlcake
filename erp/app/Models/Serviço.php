<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
