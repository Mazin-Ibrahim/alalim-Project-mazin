<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellersController extends Controller
{
    //--------------- show viwe register-------------------

    public function register()
    {
    	return view('seller.auth.register');
    }

     public function login()
    {
    	return view('seller.auth.login');
    }
}
