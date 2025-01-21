<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;
use Illuminate\Http\Request;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api/v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::ApiResource('customers', CustomerController::class);
    Route::ApiResource('invoices', InvoiceController::class);
});
Route::get('v1/customers/{id}', [CustomerController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
});
