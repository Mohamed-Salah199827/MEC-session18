<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        $user = User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "Phone" => $request->Phone,
            "Address" => $request->Address,
            "email" => $request->email,
            "password" =>  Hash::make($request->password)
        ]);

        $token = $user->createToken("token")->plainTextToken;

        return response()->json(["user" => $user, "token" => $token]);
    }
    public function login(LoginFormRequest $request)
    {

        $user = User::where("email", $request->email)->first();

        if (!$user || Hash::check($request->password, $user->password) == false) {
            return response()->json(["error" => "The provided credentials are incorrect"], 403);
        }


        $token = $user->createToken("token")->plainTextToken;

        return response()->json(["user" => $user, "token" => $token]);
    }
    public function logout()
    {
         Auth::logout();
    }
}
