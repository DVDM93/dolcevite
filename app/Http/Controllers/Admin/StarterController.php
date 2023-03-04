<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StarterStoreRequest;
use App\Models\Starters;
use Illuminate\Http\Request;

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
