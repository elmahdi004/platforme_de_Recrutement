<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email','password']);
        if(Auth::guard('employee')->attempt($credentials)){
             $user = Auth::guard('employee')->user();
             return response()->json($user, 200);
        }
        return response("Email or passowrd is incorrect , please try again",404);
    }
}
