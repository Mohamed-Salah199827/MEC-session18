<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterVFromRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AAuthController extends Controller
{
    public function register(RegisterVFromRequest $request){
        $user=User::create([
            "first_name"=>$request->first_name,
            "last_name" => $request->last_name,
            "Phone" => $request->Phone,
            "Address" => $request->Address,
            "email" => $request->email,
            "password" => Hash::make($request->password) 

        ]);

        $token= $user->createToken("token")->plainTextToken;
        return response()->json(["user"=>$user ,"token"=>$token]);


    }
    
}
