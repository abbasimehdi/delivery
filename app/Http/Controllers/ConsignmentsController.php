<?php

namespace App\Http\Controllers;

use App\Models\Consignment;
use App\Models\Rider;
use Illuminate\Http\Request;

class ConsignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.consignments.index')
            ->with('consignments', Consignment::query()->with(['rider'])->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.consignments.store')->with(['riders' => Rider::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Consignment::create([
            'name' => $request->name,
            'status' => $request->status,
            'rider_id' => $request->rider_id,
            'code' => $request->code,
            'delivery_start' => $request->delivery_start,
            'delivery_end' => $request->delivery_end,
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
        return view('admin.consignments.edit')->with([
            'consignment' => Consignment::findOrfail($id),
            'riders' => Rider::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Consignment::where('id', $id)->update([
            'name' => $request->name,
            'status' => $request->status,
            'rider_id' => $request->rider_id,
            'code' => $request->code,
            'delivery_start' => $request->delivery_start,
            'delivery_end' => $request->delivery_end,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Consignment::query()->where('id', $id)->delete();

        return redirect()->back();
    }
}
