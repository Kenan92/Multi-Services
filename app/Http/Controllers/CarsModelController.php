<?php

namespace App\Http\Controllers;

use App\Models\car_model;
use App\Http\Resources\CarsModelResource;
use App\Http\Requests\CarsModelRequest;

class CarsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CarsModelResource::collection(car_model::all());
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
    public function store(CarsModelRequest $request)
    {
        $car_model = car_model::create([
            'model_name' => $request->model_name,
            'model_descritpion' => $request->model_descritpion,
        ]);
        return new CarsModelResource($car_model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function show(car_model $car_model)
    {
        return new CarsModelResource($car_model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function edit(car_model $car_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function update(CarsModelRequest $request, car_model $car_model)
    {
        $car_model->update([
            'model_name' => $request->model_name,
            'model_descritpion' => $request->model_descritpion,
        ]);
        return new CarsModelResource($car_model);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(car_model $car_model)
    {
        $car_model->delete();
        return response(null, 204);
    }
}
