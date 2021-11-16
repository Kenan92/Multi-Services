<?php

namespace App\Http\Controllers;

use App\Models\Cc_agent;
use Illuminate\Http\Request;
use App\Http\Requests\CcAgentsRequest;
use App\Http\Resources\CcAgentsResource;

class CcAgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CcAgentsResource::collection(Cc_agent::all());
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
    public function store(CcAgentsRequest $request)
    {
        $cc_agent = Cc_agent::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
        return new CcAgentsResource($cc_agent);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cc_agent  $cc_agent
     * @return \Illuminate\Http\Response
     */
    public function show(Cc_agent $cc_agent)
    {
        return new CcAgentsResource($cc_agent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cc_agent  $cc_agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Cc_agent $cc_agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cc_agent  $cc_agent
     * @return \Illuminate\Http\Response
     */
    public function update(CcAgentsRequest $request, Cc_agent $cc_agent)
    {
        $cc_agent->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
        return new CcAgentsResource($cc_agent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cc_agent  $cc_agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cc_agent $cc_agent)
    {
        $cc_agent->delete();
        return response(null, 204);
    }
}
