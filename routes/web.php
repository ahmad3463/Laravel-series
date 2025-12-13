<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'contact');

Route::post('usercontact', [ContactController::class,'contact']);