<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create()
    {
        return view("auth.signup");
    }

    public function registerUser(Request $request) {
        try {
           
            $validatedData = $request->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6',
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required|unique:users',
            ]);
           $name = $validatedData['first_name'] . ' ' . $validatedData['last_name'];

            $user = User::create([
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']), 
                'name' => $name,
                'phone' => $validatedData['phone'],
            ]);

    
            // Return a success response
            return response()->json([
                'message' => 'User registered successfully',
                'user' => $user,
                'url'=> route('login')
            ], 201); 
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation errors as JSON
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422); 
        }
    }
}
