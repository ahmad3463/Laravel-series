<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{name}' , function($name){
    return view('about' , ['name' => $name]);
});

Route::get('/userName/{name}' , [UserController::class, 'userName']);


Route::view('userview' , 'userview');

Route::post('userform', [FormController::class, 'userform']);