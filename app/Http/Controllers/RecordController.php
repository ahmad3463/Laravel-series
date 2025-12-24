<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecordController extends Controller
{
    function getrecord(){
        $response = Http::get('https://dummyjson.com/posts/1');
        $response =  $response->body();

        return view('user', ['data'=>json_decode($response) ]);
    }
}
