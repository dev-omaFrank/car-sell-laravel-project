<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function loginUser(Request $request)
    {
        try {

            $validateData = $request->validate([
                "email" => 'required|email',
                'password' => 'required|min:6'
            ]);


            if (Auth::attempt([
                'email' => $validateData['email'],
                'password' => $validateData['password']
            ])) {

                return response()->json([
                    'message' => 'User logged in successfully',
                    'user' => Auth::user(),
                    'url'=> route('login')
                ], 200);
            }


            return response()->json([
                'message' => 'Authentication failed. Invalid credentials.',
            ], 401);  // 401 Unauthorized status code

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        }
    }
}
