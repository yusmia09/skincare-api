<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';
    protected $fillable = [
        'name' , 'merk', 'size', 'price', 'description', 'ingredients', 'image'
    ];
}
