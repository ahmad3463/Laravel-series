<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(Request $request ){
            $request->validate([
                'username'=> 'required|max:15|min:4',
                'useremail'=> 'required|email',
                'userphone'=> 'required|max:12|min:11',
                'userpassword'=> 'required|min:8',
            ],[
                'username.min' => 'username must be atleast 4 character',
                'useremail.email' => 'please enter a valid email address',
                'userpassword.min' => ' password must be atleast 8 digits'
            ]);


           return redirect('/contact')->with('success', 'your form has been Submitted.');

    }
}
