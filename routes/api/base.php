<?php 


use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;

Route::get("/home", function () { 
    return response()->json([
        'message'=> 'Welcome to Home Route',
        'success' => true,
        'timestamp' => now(),
       ]);
});