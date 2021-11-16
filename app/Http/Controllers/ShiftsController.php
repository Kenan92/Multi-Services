<?php

namespace App\Http\Controllers;

use App\Models\shift;
use App\Http\Resources\ShiftsResource;
use App\Http\Requests\ShiftsRequest;

class ShiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ShiftsResource::collection(shift::all());
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
    public function store(ShiftsRequest $request)
    {
        $shift = Shift::create([
            'driver_id' => $request->driver_id,
            'cab_id' => $request->cab_id,
            'shift_start_time' => $request->shift_start_time,
            'shift_end_time' => $request->shift_end_time,
            'login_time' => $request->login_time,
            'logout_time' => $request->logout_time,
        ]);
        return new ShiftsResource($shift);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function show(shift $shift)
    {
        return new ShiftsResource($shift);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function edit(shift $shift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function update(ShiftsRequest $request, shift $shift)
    {
        $shift->update([
            'driver_id' => $request->driver_id,
            'cab_id' => $request->cab_id,
            'shift_start_time' => $request->shift_start_time,
            'shift_end_time' => $request->shift_end_time,
            'login_time' => $request->login_time,
            'logout_time' => $request->logout_time,
        ]);
        return new ShiftsResource($shift);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function destroy(shift $shift)
    {
        $shift->delete();
        return response(null, 204);
    }
}
