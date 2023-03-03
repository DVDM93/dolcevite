<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDish extends Model
{
    use HasFactory;
    protected $fillable  = ['name' , 'image' , 'price' , 'description', 'description2' , 'description3',];

}
