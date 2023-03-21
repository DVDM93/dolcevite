<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StarterStoreRequest;
use App\Models\Starters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StarterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $starters = Starters::all();
        return view('admin.starters.index' , compact('starters'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.starters.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StarterStoreRequest $request)
    {
        $image = $request->file('image')->store('public/starters');

        Starters::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            ]);

            return to_route('admin.starters.index');
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
    public function edit(Starters $starter)
    {
        return view('admin.starters.edit', compact('starter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Starters $starter)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $starter->image;
         if ($request->hasFile('image')) {
            Storage::delete($starter->image);
            $image = $request->file('image')->store('public/starters');
         }

         $starter->update([
            'name' => $request->name,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'image' => $image,
            'price' => $request->price,
         ]);

         return to_route('admin.starters.index')->with('success', 'Modifica eseguita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Starters $starter)
    {
        Storage::delete($starter->image);
        $starter->delete();

        return to_route('admin.starters.index')->with('danger', 'Eliminato con successo');
    }
}
