<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categories;

use Auth;

class AdminController extends Controller
{
    public function addcategory()
    {
      return view('admin.addcategory');
    }


    public function addquiz()
    {
      $categories=Categories::all();
      return view('admin.addquiz',compact('categories'));
    }


    public function editcategory($id)
    {
    	$category=Categories::find($id);
      return view('admin.editcategory',compact('category'));
    }

    public function publicprofile()
    {
    	 return view('admin.publicprofile');
    }

    public function editaccount()
    {
    	 return view('admin.editaccount');
    }


    public function messages()
    {
    	 return view('admin.messages');
    }

    public function addanswer()
    {
         return view('admin.addanswers  ');
    }

    public function __construct()
    {
      //$this->middleware('auth');
    }

    public function index()
    {
      return view('admin.index');
    }

    public function login()
    {
      return view('auth.login-admin');
    }

    public function postLogin(Request $request)
    {
      $validator =validator($request->all(),[
        'email'      => 'required|min:3|max:100',
        'password'   => 'required|min:3|max:100',
      ]);

      if($validator->fails())
      {
        return redirect('/admin/login')
        ->withErrors($validator)
        ->withInput();
      }

      $creadintials = ['email'=>$request->get('email'),'password'=>$request->get('password')];
      if(auth()->guard('admin')->attempt($creadintials))
      {
        return redirect('/admin');
      }else{
        return redirect('/admin/login')
        ->withErrors(['errors'=>'Login Error!'])
        ->withInput();
      }
    }


    public function logout()
    {
      auth()->guard('admin')->logout();
      return redirect('/admin/login');
    }
}
