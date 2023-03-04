<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhitePizzaStoreRequest;
use App\Models\WhitePizza;
use Illuminate\Http\Request;

class WhitePizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whitePizzas = WhitePizza::all();
        return view('admin.white_pizzas.index' , compact('whitePizzas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.white_pizzas.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhitePizzaStoreRequest $request)
    {
        $image = $request->file('image')->store('public/white_pizzas');

        WhitePizza::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
        ]);

        return to_route('admin.white_pizzas.index');
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
