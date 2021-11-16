<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cab_ride_status;
use App\Http\Requests\CabRideStatusesRequest;
use App\Http\Resources\CabRideStatusesResource;

class CabRideStatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CabRideStatusesResource::collection(Cab_ride_status::all());
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
    public function store(CabRideStatusesRequest $request)
    {
        $cab_ride_status = Cab_ride_status::create([
            'cab_ride_id' => $request->cab_ride_id,
            'status_id' => $request->status_id,
            'status_time' => $request->status_time,
            'cc_agent_id' => $request->cc_agent_id,
            'shift_id' => $request->shift_id,
            'status_details' => $request->status_details,
        ]);
        return new CabRideStatusesResource($cab_ride_status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cab_ride_status  $cab_ride_status
     * @return \Illuminate\Http\Response
     */
    public function show(Cab_ride_status $cab_ride_status)
    {
        return new CabRideStatusesResource($cab_ride_status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cab_ride_status  $cab_ride_status
     * @return \Illuminate\Http\Response
     */
    public function edit(Cab_ride_status $cab_ride_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cab_ride_status  $cab_ride_status
     * @return \Illuminate\Http\Response
     */
    public function update(CabRideStatusesRequest $request, Cab_ride_status $cab_ride_status)
    {
        $cab_ride_status->update([
            'cab_ride_id' => $request->cab_ride_id,
            'status_id' => $request->status_id,
            'status_time' => $request->status_time,
            'cc_agent_id' => $request->cc_agent_id,
            'shift_id' => $request->shift_id,
            'status_details' => $request->status_details,
        ]);
        return new CabRideStatusesResource($cab_ride_status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cab_ride_status  $cab_ride_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cab_ride_status $cab_ride_status)
    {
        $cab_ride_status->delete();
        return response(null, 204);
    }
}
