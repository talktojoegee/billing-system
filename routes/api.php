<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/gis", [\App\Http\Controllers\RemoteController::class, 'makeCalls']);
Route::get("/lga/{name}", [\App\Http\Controllers\RemoteController::class, 'loadContentByLgaName']);
