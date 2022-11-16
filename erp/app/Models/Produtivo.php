<?php

namespace App\Models;

use App\Models\Produtivo;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProdutivoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Produtivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'função', 
        
    ];

    public function serviço(){
        return $this->belongsToMany(Serviço::class);
    }
   
}
