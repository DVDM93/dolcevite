<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;


class MenuContoller extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index' , compact('menus'));
    }

    public function antipasti()
    {
        $antipasti = Category::where('name' , 'antipasti')->first();
        return view('menu.index' , compact('antipasti'));

    }
}
