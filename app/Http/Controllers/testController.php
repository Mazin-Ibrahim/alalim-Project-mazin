<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class testController extends Controller
{
    public function index(){
      $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IjIyM2U2VUFIMHFFZWhvV3cifQ.eyJpc3MiOiJodHRwczpcL1wvYXBpLmFsYWFsaW1zaG9wLmNvbSIsInN1YiI6IjEiLCJqdGkiOiIyMjNlNlVBSDBxRWVob1d3IiwiaWF0IjoxNTk2NTI3NjE3LCJuYmYiOjE1OTY1Mjc2MTcsImV4cCI6MTU5NjUzMTIxNywicmxpIjoxNTk2OTYzMjE3LCJleHBpcmVfYXQiOiIyMDIxLTA4LTA0VDA3OjUzOjM3LjU3MTE5MloifQ.TdeazGBjHx05Zelu3DjmRcJpwHFom36yuf3ysdwOfqw';
      $client = new Client(['base_uri' => 'https://api.alaalimshop.com/']);
      $headers = [
    'Authorization' => 'Bearer ' . $token,
    'Accept'        => 'application/json',
    "Content-Type"=> "application/json"
    ];

      // $response = $client->request('GET', '/user/home/about_us');
      $response = $client->request('GET', '/seller/product/create', [
        'headers' => $headers
    ]);

    // $body = $client->get(....)->getBody();

    // $obj = json_decode($response);


      // echo json_decode($response->getBody(), true);
      // return json_decode($response->getBody());
    return  view('test')->with('leads', json_decode($response->getBody(), true));
    }
}
