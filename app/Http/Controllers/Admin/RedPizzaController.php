<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RedPizzaStoreRequest;
use App\Models\RedPizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(RedPizzaStoreRequest $request)
    {
        $image = $request->file('image')->store('public/red_pizzas');

        RedPizza::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            ]);

            return to_route('admin.red_pizzas.index');
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
    public function edit(RedPizza $redPizza)
    {
        return view('admin.red_pizzas.edit', compact('redPizza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RedPizza $redPizza)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $redPizza->image;
         if ($request->hasFile('image')) {
            Storage::delete($redPizza->image);
            $image = $request->file('image')->store('public/red_pizzas');
         }

         $redPizza->update([
            'name' => $request->name,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'image' => $image,
            'price' => $request->price,
         ]);

         return to_route('admin.red_pizzas.index')->with('success', 'Modifica eseguita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RedPizza $redPizza)
    {
        Storage::delete($redPizza->image);
        $redPizza->delete();

        return to_route('admin.red_pizzas.index')->with('danger', 'Eliminato con successo');
    }
}
