<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialPizzaStoreRequest;
use App\Models\SpecialPizza;
use Illuminate\Http\Request;

class SpecialPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialPizzas = SpecialPizza::all();
        return view('admin.special_pizzas.index' , compact('specialPizzas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.special_pizzas.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecialPizzaStoreRequest $request)
    {
        $image = $request->file('image')->store('public/special_pizzas');

        SpecialPizza::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            ]);

            return to_route('admin.special_pizzas.index');
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
