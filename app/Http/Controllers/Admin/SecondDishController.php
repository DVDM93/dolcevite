<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SecondDishStoreRequest;
use App\Models\SecondDish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SecondDishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secondDishes = SecondDish::all();
        return view('admin.second_dishes.index' , compact('secondDishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.second_dishes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SecondDishStoreRequest $request)
    {
        $image = $request->file('image')->store('public/second_dishes');

        SecondDish::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            ]);

            return to_route('admin.second_dishes.index');
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
    public function edit(SecondDish $secondDish)
    {
        return view('admin.second_dishes.edit', compact('secondDish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SecondDish $secondDish)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $secondDish->image;
         if ($request->hasFile('image')) {
            Storage::delete($secondDish->image);
            $image = $request->file('image')->store('public/second_dishes');
         }

         $secondDish->update([
            'name' => $request->name,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'image' => $image,
            'price' => $request->price,
         ]);

         return to_route('admin.second_dishes.index')->with('success', 'Modifica eseguita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
