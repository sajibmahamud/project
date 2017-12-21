<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Auth;
use Mail;
use Session;

class PagesController extends Controller
{
    public function getIndex() {		
		return view('pages.welcome');
	}
    public function getUserProfile() {		
		return view('pages.user_profile');
	}
    public function getDelete() {		
		return view('pages.delete');
	}
   


}
