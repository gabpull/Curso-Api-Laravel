<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

Class UserController
{
  public function login(){
    $data = [
      'email' => request('email'),
      'password' => request('password')
    ];
    if (Auth::attempt($data)){
      return response()->json("Bienvenido", 200);
    } else {
      return response()->json("Error en el Login", 401);
    }
    }

}



?>
