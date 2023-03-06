<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhitePizzaStoreRequest;
use App\Models\WhitePizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function edit(WhitePizza $whitePizza)
    {
        return view('admin.white_pizzas.edit', compact('whitePizza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WhitePizza $whitePizza)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $whitePizza->image;
         if ($request->hasFile('image')) {
            Storage::delete($whitePizza->image);
            $image = $request->file('image')->store('public/white_pizzas');
         }

         $whitePizza->update([
            'name' => $request->name,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'image' => $image,
            'price' => $request->price,
         ]);

         return to_route('admin.white_pizzas.index')->with('success', 'Modifica eseguita');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
