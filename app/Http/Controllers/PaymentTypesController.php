<?php

namespace App\Http\Controllers;

use App\Models\Payment_type;
use App\Http\Requests\PaymentTypesRequest;
use App\Http\Resources\PaymentTypesResource;

class PaymentTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PaymentTypesResource::collection(Payment_type::all());
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
    public function store(PaymentTypesRequest $request)
    {
        $payment_type = Payment_type::create([
            'type_name' => $request->type_name
        ]);
        return new PaymentTypesResource($payment_type);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_type $payment_type)
    {
        return new PaymentTypesResource($payment_type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_type $payment_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentTypesRequest $request, Payment_type $payment_type)
    {
        $payment_type->update([
            'type_name' => $request->type_name
        ]);
        return new PaymentTypesResource($payment_type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_type $payment_type)
    {
        $payment_type->delete();
        return response(null, 204);
    }
}
