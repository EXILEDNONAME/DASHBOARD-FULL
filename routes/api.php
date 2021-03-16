<?php

use Illuminate\Http\Request;
use App\User;

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

// Dummy
Route::middleware('auth:api')->get('/dummies', function (Request $request) {
  return User::all();
});
