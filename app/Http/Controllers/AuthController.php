<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email','password']);
        if(Auth::attempt($credentials)){
            return response(Auth::user(),200);
        }
        return response("Email or passowrd is incorrect , please try again",404);
    }
}
