<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecapController;
use App\Models\job;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{name}' , function($name){
    return view('about' , ['name' => $name]);
});