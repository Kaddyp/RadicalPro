<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('save',[UserController::class,'save']);
Route::get('users',[UserController::class,'users']);
Route::delete('users/{id}',[UserController::class,'deleteUsers']);