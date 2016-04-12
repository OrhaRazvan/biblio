<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){

 	return view('welcome');
	}
	
	public function contact(){

	 	return view('pages.contact');
	}
}