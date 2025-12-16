<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
 Route::get('/' , [DataController::class, 'data']);
Route::view('/contact', 'contact');

Route::post('usercontact', [ContactController::class,'contact']);