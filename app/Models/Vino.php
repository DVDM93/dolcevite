<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    use HasFactory;
    protected $fillable  = ['name' , 'image' , 'price' ,'copa', 'description', 'description2' , 'description3',];

}
