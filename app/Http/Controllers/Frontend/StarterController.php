<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Starters;
use Illuminate\Http\Request;

class StarterController extends Controller
{
    public function index()
    {
        $starters = Starters::all();
        return view('frontend.starters.index' , compact('starters'));
    }
}
