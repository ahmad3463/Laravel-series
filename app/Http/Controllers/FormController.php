<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormController extends Controller
{
    function userform(Request $request){
        $request->validate([
            'username' => 'required |string|min:3|max:10',
            'useremail' => 'required | email',
            'userphone' => 'required | min:10 | max:11'
        ],[
            'username.required' => 'name is required',
            'username.min' => 'name min char will be atleast 3'
        ]);
        }
}
