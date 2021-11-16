<?php

namespace App\Http\Controllers;

use App\Models\Cab_ride;
use Illuminate\Http\Request;
use App\Http\Requests\CabRidesRequest;
use App\Http\Resources\CabRidesResource;

class CabRidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CabRidesResource::collection(Cab_ride::all());
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
    public function store(CabRidesRequest $request)
    {
        $cab_ride = Cab_ride::create([
            'shift_id' => $request->shift_id,
            'ride_start_time' => $request->ride_start_time,
            'ride_end_time' => $request->ride_end_time,
            'address_starting_point' => $request->address_starting_point,
            'GPS_starting_point' => $request->GPS_starting_point,
            'address_destination' => $request->address_destination,
            'GPS_destination' => $request->GPS_destination,
            'canceled' => $request->canceled,
            'payment_type_id' => $request->payment_type_id,
            'price' => $request->price,
        ]);
        return new CabRidesResource($cab_ride);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cab_ride  $cab_ride
     * @return \Illuminate\Http\Response
     */
    public function show(Cab_ride $cab_ride)
    {
        return new CabRidesResource($cab_ride);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cab_ride  $cab_ride
     * @return \Illuminate\Http\Response
     */
    public function edit(Cab_ride $cab_ride)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cab_ride  $cab_ride
     * @return \Illuminate\Http\Response
     */
    public function update(CabRidesRequest $request, Cab_ride $cab_ride)
    {
        $cab_ride->update([
            'shift_id' => $request->shift_id,
            'ride_start_time' => $request->ride_start_time,
            'ride_end_time' => $request->ride_end_time,
            'address_starting_point' => $request->address_starting_point,
            'GPS_starting_point' => $request->GPS_starting_point,
            'address_destination' => $request->address_destination,
            'GPS_destination' => $request->GPS_destination,
            'canceled' => $request->canceled,
            'payment_type_id' => $request->payment_type_id,
            'price' => $request->price,
        ]);
        return new CabRidesResource($cab_ride);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cab_ride  $cab_ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cab_ride $cab_ride)
    {
        $cab_ride->delete();
        return response(null, 204);
    }
}
