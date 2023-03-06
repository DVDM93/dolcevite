<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DessertStoreRequest;
use App\Models\Dessert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DessertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desserts = Dessert::all();
        return view('admin.desserts.index', compact('desserts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.desserts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DessertStoreRequest $request)
    {
        $image = $request->file('image')->store('public/desserts');

        Dessert::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
        ]);

        return to_route('admin.desserts.index');
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
    public function edit(Dessert $dessert)
    {
        return view('admin.Desserts.edit', compact('dessert'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dessert $dessert)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $dessert->image;
         if ($request->hasFile('image')) {
            Storage::delete($dessert->image);
            $image = $request->file('image')->store('public/desserts');
         }

         $dessert->update([
            'name' => $request->name,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'image' => $image,
            'price' => $request->price,
         ]);

         return to_route('admin.desserts.index')->with('success', 'Modifica eseguita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
