<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use App\Http\Resources\CabsResource;
use App\Http\Requests\CabsRequest;

class CabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CabsResource::collection(Cab::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CabsRequest $request)
    {
        $cab = Cab::create([
            'license_plate' => $request->license_plate,
            'car_model_id' => $request->car_model_id,
            'manufacture_year' => $request->manufacture_year,
            'owner_id' => $request->owner_id,
            'active' => $request->active,
        ]);
        return new CabsResource($cab);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cab  $cab
     * @return \Illuminate\Http\Response
     */
    public function show(Cab $cab)
    {
        return new CabsResource($cab);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cab  $cab
     * @return \Illuminate\Http\Response
     */
    public function edit(Cab $cab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cab  $cab
     * @return \Illuminate\Http\Response
     */
    public function update(CabsRequest $request, Cab $cab)
    {
        $cab->update([
            'license_plate' => $request->license_plate,
            'car_model_id' => $request->car_model_id,
            'manufacture_year' => $request->manufacture_year,
            'owner_id' => $request->owner_id,
            'active' => $request->active,
        ]);
        return new CabsResource($cab);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cab  $cab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cab $cab)
    {
        $cab->delete();
        return response(null, 204);
    }
}
