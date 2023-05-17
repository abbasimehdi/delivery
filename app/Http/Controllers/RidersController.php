<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;

class RidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.riders.index')
            ->with('riders', Rider::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.riders.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rider::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'status' => $request->status,
            'personnel_code' => $request->personnel_code,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RidersController $ridersController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.riders.edit')->with(['rider' => Rider::findOrfail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Rider::where('id', $id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'status' => $request->status,
            'personnel_code' => $request->personnel_code,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rider::query()->where('id', $id)->delete();

        return redirect()->back();
    }
}
