<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function quizresult()
    {
    	return view('user.quizresult');
    }

    public function account()
    {
    	 return view('user.editaccount');
    }

    public function messages()
    {
    	return view('user.messages');
    }
}
