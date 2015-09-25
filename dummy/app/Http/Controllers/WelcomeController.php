<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;
use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
    	$lists = array();
    	return view('home.welcome')->with('lists', $lists);
    }
}
