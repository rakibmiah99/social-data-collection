<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('facebook')/*->middleware('content.policy')*/->group(function (){
    Route::get('store', [\App\Http\Controllers\FacebookController::class, 'store']);
});