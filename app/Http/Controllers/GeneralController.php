<?php

namespace App\Http\Controllers;

use App\Models\Dessert;
use App\Models\MainDish;
use App\Models\Rimoli;
use App\Models\Starters;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $starters = Starters::all();
        $rimolis = Rimoli::all();
        $mainDishes = MainDish::all();
        return view('menu', compact('starters','rimolis', 'mainDishes'));
    }
}
