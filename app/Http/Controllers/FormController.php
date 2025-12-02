<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormController extends Controller
{
    function userform(Request $request){
        $request->validate([
            'username' => 'required | min 3 | max 10',
            'useremail' => 'required | email',
            'userphone' => 'required'
        ]);
        }
}
