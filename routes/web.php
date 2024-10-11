<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class, 'index'] );
Route::get('/event/create',[EventController::class, 'create'] );
Route::get('/event/{id}',[EventController::class, 'show'] );
Route::post('/event',[EventController::class,'store']);

Route::get('/about', function () {
    return view('about');
});


