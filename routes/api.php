<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabsController;
use App\Http\Controllers\ShiftsController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\CabRidesController;
use App\Http\Controllers\CcAgentsController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\CarsModelController;
use App\Http\Controllers\PaymentTypesController;
use App\Http\Controllers\CabRideStatusesController;


Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/driver', DriversController::class);

    Route::apiResource('/cab', CabsController::class);

    Route::apiResource('/car-model', CarsModelController::class);

    Route::apiResource('/shift', ShiftsController::class);

    Route::apiResource('/cab-ride', CabRidesController::class);

    Route::apiResource('/cab-ride-status', CabRideStatusesController::class);

    Route::apiResource('/status', StatusesController::class);

    Route::apiResource('/payment-type', PaymentTypesController::class);

    Route::apiResource('/cc-agent', CcAgentsController::class);
});
