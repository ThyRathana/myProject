<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class registerAuthController extends Controller
{
	///// like create function
	public function index()
    {
        return view('home');
    }
    public function create()
    {
    	return view('category.userRegister');
    }

    ///// like store function
    public function Store(Request $request)
    {
    	return $this->validate($request,[
    		'username' => 'required|max:255',
    		'email' => 'required|email|unique:users|max:255',
    		'password' => 'required|confirmed|max:255',
    	]);
    	Customers::create($request->all());
    	return redirect('registerAuthController.index')->with('Status','you are register');
    }
}
