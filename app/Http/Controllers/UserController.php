<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      $data=[
        'name' => 'malaz',
        'email' => 'malaz@gmail.com',
        'password' => bcrpt('password'),
      ];
      User::create($data);


    }
}
