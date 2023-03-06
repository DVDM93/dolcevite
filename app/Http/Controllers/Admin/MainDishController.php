<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainDishStoreRequest;
use App\Models\MainDish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainDishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mainDishes = MainDish::all();
        return view('admin.main_dishes.index' , compact('mainDishes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.main_dishes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MainDishStoreRequest $request)
    {
        $image = $request->file('image')->store('public/main_dishes');

        MainDish::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            ]);

            return to_route('admin.main_dishes.index');
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
    public function edit(MainDish $mainDish)
    {
        return view('admin.main_dishes.edit', compact('mainDish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainDish $mainDish)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $mainDish->image;
         if ($request->hasFile('image')) {
            Storage::delete($mainDish->image);
            $image = $request->file('image')->store('public/main_dishes');
         }

         $mainDish->update([
            'name' => $request->name,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'image' => $image,
            'price' => $request->price,
         ]);

         return to_route('admin.main_dishes.index')->with('success', 'Modifica eseguita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
