<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register()
    {
    	return view('user.auth.register');
    }

    public function login()
    {
    	return view('user.auth.login');
    }
}
