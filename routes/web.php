<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
 Route::get('/' , [DataController::class, 'data']);
Route::view('/contact', 'contact');

Route::post('usercontact', [ContactController::class,'contact']);

Route::get('student',[studentController::class,'getStudent']);
Route::get('record', [RecordController::class, 'getrecord']);
Route::post('add-post',[PostController::class, 'post']);
Route::view('create-post', 'create-post');
Route::get('post-list', [PostController::class, 'postlist'])->name('postlist');
Route::get('single-post/{id}', [PostController::class, 'singlepost'])->name('single-post');
// Show edit form
Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Update post
Route::put('post/{post}', [PostController::class, 'update'])->name('posts.update');
