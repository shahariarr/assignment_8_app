<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index(Request $request){
      $id= $request->id;
      $name ="Donal Trump";
      $age = "75";
      $data = [
        "id"=> $id,
        "name"=> $name,
        "age"=> $age
      ];
        $Name = 'access_token';
        $Value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        $response = Response()->json($data,200)->cookie($Name, $Value, $minutes, $path, $domain, $secure, $httpOnly);
        

        return $response;
         
    }
}
