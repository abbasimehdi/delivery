<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cities.index')
            ->with('cities', City::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cities.store')->with(['cities' => City::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        City::create([
            'status' => $request->status,
            'state' => $request->state,
            'name' => $request->name,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return redirect()->back();
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
        return view('admin.cities.edit')->with(['city' => City::findOrfail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        City::where('id', $id)->update([
            'status' => $request->status,
            'state' => $request->state,
            'name' => $request->name,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        City::query()->where('id', $id)->delete();

        return redirect()->back();
    }
}
