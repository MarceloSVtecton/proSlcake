<?php

namespace App\Models;
 
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preço', 
        'estoque'
    ];
}
