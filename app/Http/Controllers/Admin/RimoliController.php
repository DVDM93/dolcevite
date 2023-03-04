<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RimoliStoreRequest;
use App\Models\Rimoli;
use Illuminate\Http\Request;

class RimoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rimolis = Rimoli::all();
        return view('admin.rimolis.index' , compact('rimolis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rimolis.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RimoliStoreRequest $request)
    {
        $image = $request->file('image')->store('public/rimolis');

        Rimoli::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            ]);

            return to_route('admin.rimolis.index');
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
