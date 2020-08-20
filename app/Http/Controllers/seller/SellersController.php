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

    public function profile()
    {
    	return view('seller.profile');
    }

    public function activation_code($code)
    {  
           
            return view('seller.auth.activation_code')->withCode($code);
    }

    public function store()
    {
        return view('seller.store.store');
    }

    public function order()
    {
        return view('seller.order.order');
    }

     public function orderDetails()
    {
        return view('seller.order.orderDetails');
    }
}
