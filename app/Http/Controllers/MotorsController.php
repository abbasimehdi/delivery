<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Rider;
use Illuminate\Http\Request;

class MotorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.motors.index')
            ->with('motors', Motor::query()->with(['rider'])->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.motors.store')->with(['riders' => Rider::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Motor::create([
            'status' => $request->status,
            'rider_id' => $request->rider_id,
            'plate' => $request->plate,
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
        return view('admin.motors.edit')->with(['motor' => Motor::findOrfail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Motor::where('id', $id)->update([
            'status' => $request->status,
            'rider' => $request->rider,
            'plate' => $request->plate,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Motor::query()->where('id', $id)->delete();

        return redirect()->back();
    }
}
