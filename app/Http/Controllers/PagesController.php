<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Wcome to Laravel';
    	//return view('pages.index', compact('title'));
    	return view('pages.index')->with('title', $title);
    }

    public function about(){
    	$title = 'About US';
    	return view('pages.about')->with('title',$title);
    }

    public function profile(){
    	$title = "Profile";
    	return view('profile')->with('title', $title);
    }
    
    public function dashboard(){
        // Passing multiple data
        $data = array(
            'title' => 'Dashboard',
            'dash' => ['Homepage' , 'Profile', 'Register']
        );
    	return view('pages.dashboard')->with($data);
    }

    public function register(){
        $title = "Register";
    	return view('register')->with('title', $title);
    }	
}

