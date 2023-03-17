<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use App\Models\Dessert;
use App\Models\MainDish;
use App\Models\NewEntry;
use App\Models\RedPizza;
use App\Models\Rimoli;
use App\Models\SecondDish;
use App\Models\SpecialPizza;
use App\Models\Starters;
use App\Models\Vino;
use App\Models\WhitePizza;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class GeneralController extends Controller
{
    public function index()
    {
        $starters = Starters::all();
        $rimolis = Rimoli::all();
        $mainDishes = MainDish::all();
        $secondDishes = SecondDish::all();
        $redPizzas = RedPizza::all();
        $whitePizzas = WhitePizza::all();
        $specialPizzas = SpecialPizza::all();
        $newEntries = NewEntry::all();
        $desserts = Dessert::all();
        $cocktails = Cocktail::all();
        $vinos = Vino::all();
        return view('welcome', compact('starters','rimolis', 'mainDishes', 'secondDishes', 'redPizzas', 'whitePizzas', 'specialPizzas', 'newEntries', 'desserts', 'cocktails', 'vinos' ));
    }

    public function index2()
    {
        $starters = Starters::all();
        $rimolis = Rimoli::all();
        $mainDishes = MainDish::all();
        $secondDishes = SecondDish::all();
        $redPizzas = RedPizza::all();
        $whitePizzas = WhitePizza::all();
        $specialPizzas = SpecialPizza::all();
        $newEntries = NewEntry::all();
        $desserts = Dessert::all();
        $cocktails = Cocktail::all();
        $vinos = Vino::all();
        return view('prova', compact('starters','rimolis', 'mainDishes', 'secondDishes', 'redPizzas', 'whitePizzas', 'specialPizzas', 'newEntries', 'desserts', 'cocktails', 'vinos' ));
    }


    public function starterShow(Starters $starter)
    {
        return view('starters.show', compact('starter'));
    }

    public function rimoliShow(Rimoli $rimoli)
    {
        return view('rimolis.show', compact('rimoli'));
    }


    public function mainDishShow(MainDish $mainDish)
    {
        return view('main_dishes.show', compact('mainDish'));
    }

    public function secondDishShow(SecondDish $secondDish)
    {
        return view('second_dishes.show', compact('secondDish'));
    }

    public function redPizzaShow(RedPizza $redPizza)
    {
        return view('red_pizzas.show', compact('redPizza'));
    }
}
