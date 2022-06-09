<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Laravel\Passport\HasApiTokens;

Class UserController
{
  public function login(Request $request){
    //dd($request->all());
    $data = [
      'email' => request('email'),
      'password' => request('password')
    ];

    //dd(User::find(1));
    if (Auth::attempt($data)){
      $user = User::find(1);

      //dd($user);
      
      
      $loginData['token'] = $user->createToken('EDtoken')->accessToken;
      return response()->json([
        "message" => "Bienvenido",
        "data" => $loginData
      ], 200);



    } else {
      return response()->json([
        "message" => "Error en el Login"
      ], 401);
    }
    }

    public function register(Request $request){
      $data = $request->all();
      $data['password'] = bcrypt($data['password']);

      $user = User::create($data);

      $loginData['token'] = $user->createToken('EDtoken')->accessToken;
      return response()->json([
        "message" => "Bienvenido nuevo usuario",
        "data" => $loginData
      ], 200);
    }

}



?>
