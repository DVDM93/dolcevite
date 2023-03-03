<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainDishStoreRequest;
use App\Models\MainDish;
use Illuminate\Http\Request;

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
