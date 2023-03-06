<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VinoStoreRequest;
use App\Models\Vino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vinos = Vino::all();
        return view('admin.vinos.index', compact('vinos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vinos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VinoStoreRequest $request)
    {
        $image = $request->file('image')->store('public/vinos');

        Vino::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            'copa' => $request->copa,
        ]);

        return to_route('admin.vinos.index');
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
    public function edit(Vino $vino)
    {
        return view('admin.vinos.edit', compact('vino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vino $vino)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $vino->image;
         if ($request->hasFile('image')) {
            Storage::delete($vino->image);
            $image = $request->file('image')->store('public/vinos');
         }

         $vino->update([
            'name' => $request->name,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'image' => $image,
            'price' => $request->price,
            'copa' => $request->copa,
         ]);

         return to_route('admin.vinos.index')->with('success', 'Modifica eseguita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
