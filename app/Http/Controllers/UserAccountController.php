<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOption;


class UserAccountController extends Controller
{
  public function store(Request $request)
 {
   $all_data=request()->validate([
       'username' => 'required',
       'full_name' => 'required',
       'phone_number' => 'required',
       'country' => 'required',
       'password'=> 'required',
       'state'=> 'required',
       'city'=> 'required',
       'email'=> 'nullable|email',
       'identity'=> 'nullable',
   ]);

        $client = new Client(['base_uri' => 'https://api.alaalimshop.com/']);
        $headers = [
      'Accept'        => 'application/json',
      "Content-Type"=> "application/json"
      ];
      if ($files = $request->file('identity')) {
            $destinationPath = 'images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $imagePath= $profileImage;
            $files->move($destinationPath, $profileImage);
         }
         echo 'image -path '. $imagePath;
      $data = [
        'username' => $all_data['username'],
        "full_name" => $all_data['full_name'],
        'phone_number' =>$all_data['phone_number'],
        'country' => $all_data['country'],
        'password' => $all_data['password'],
        'state' => $all_data['state'],
        'city' => $all_data['city'],
        'email' => $all_data['email'],
        'identity' => $imagePath
   ];
        $response = $client->request('POST', '/user/authentication/register', [
          'headers' => $headers,
          'body' => json_encode($data)
      ]);
      dd($response);
  
 }
}
