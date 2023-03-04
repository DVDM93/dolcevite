<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewEntryStoreRequest;
use App\Models\NewEntry;
use Illuminate\Http\Request;

class NewEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newEntries = NewEntry::all();
        return view('admin.new_entries.index' , compact('newEntries'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new_entries.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewEntryStoreRequest $request)
    {
        $image = $request->file('image')->store('public/new_entries');

        NewEntry::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'price' => $request->price,
            ]);

            return to_route('admin.new_entries.index');
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
