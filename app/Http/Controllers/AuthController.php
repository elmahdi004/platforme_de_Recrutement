<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email','password']);
        if(Auth::guard('employers')->attempt($credentials)){
             $user = Auth::guard('employers')->user();
             return response()->json($user, 200);
        }
        return response("Email or passowrd is incorrect , please try again",404);
        // return $credentials;
    }
    public function register(RegisterRequest $request){
        Employer::create([
            'full_name' => $request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'address' => '',
            'phone_number' => '',
            'founded_date' => null,
            'about' => '',
            'logo' => '',
            'website' => '',
            'company_size' => '',
            'is_admin' => 0
        ]);
        return response('your account has been created , now try to login',201);
    }
    public function getUser(){
        if(Auth::guard('employers')->check()){
                return response(Auth::guard('employers')->user(),200);
        }
        return response('there is no user login',404);
    }
    public function logout(){
        Auth::guard('employers')->logout();
    }
}
