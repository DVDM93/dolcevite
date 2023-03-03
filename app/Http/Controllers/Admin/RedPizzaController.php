<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RedPizza;
use Illuminate\Http\Request;

class RedPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redPizzas = RedPizza::all();
        return view('admin.red_pizzas.index' , compact('redPizzas'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.red_pizzas.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
