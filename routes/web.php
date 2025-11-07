<?php
use  \Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs/{id}', function ($id) {
    
        $jobs = [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],

            [
                'id' => 2,
                'title' => 'programmer',
                'salary' => '$10,000'
            ],

            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$30,000'
            ]

            ];
        
        
        $job = Arr::first($jobs, fn($job)  => $job['id'] == $id);

        return view('jobs' , ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});