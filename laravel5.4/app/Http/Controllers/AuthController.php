<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin(){
        return view('auths.login');
    }

    public function postLogin(){
      $input = request()->except(['_token']); 

      if (auth()->attempt($input)){
          return redirect()-> intended('/employee');
      }else{
          abort(401);
      }
    }

    public function logout(){
        auth()->logout();

        return redirect('employee');

    }



}



