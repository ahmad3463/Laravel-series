<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
   function getStudent(){
    $username = \App\Models\Student::all();
    return $username;
   }
}
