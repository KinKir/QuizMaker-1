<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categories;

class UserChooseQuizController extends Controller
{
	public function index()
	{
    $categories=Categories::all();

    return view('user.takequiz',compact('categories'));
	}
}
