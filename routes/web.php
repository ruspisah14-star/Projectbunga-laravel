<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

Route::get('/', [HomeController::class,'dashboard']);
Route::get('/regis', [FormController::class,'formregister']);
Route::post('/welcome', [FormController::class,'kirim']);

//Route::get('/master', function(){
    //return view('layout/master');
//});



