<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Product API Routes
Route::apiResource('/products', 'ProductController');

//Review Routes
Route::group(['prefix'=>'products'], function(){
    Route::apiResource('/{product}/reviews','ReviewController');
}); 