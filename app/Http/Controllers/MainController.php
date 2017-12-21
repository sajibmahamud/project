<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function getadmin(){
    	return view('main.incoming');
    }    
    public function getadminlogin(){
    	return view('main.outgoing');
    }
        
}
