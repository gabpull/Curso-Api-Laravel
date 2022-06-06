<?php
   namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController{

  public function login(){
    $data = [
      'email' => request('email'),
      'password' => request('password')
    ];
    if(Auth::attempt($data)) {
      return response()->json([
        "data" => "Bienvenido",
        "status" => Response::HTTP_OK
    ],Response::HTTP_OK);
    } else {
      return response()->json([
        "data" => "Error en el Login",
        "status" => Response::HTTP_NOT_FOUND
    ],Response::HTTP_NOT_FOUND);
    }
  }
}
