<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email', $validateData['email'])->first();

        // $token = $user->createToken('api');

        if ($user && Hash::check($validateData['password'], $user->password)) {
            $token = $user->createToken('api', ['create']);
            return [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'token' => $token->plainTextToken
            ];
        } else {
            return [
                'error' => 'Invalid Credentials'
            ];
        }
    }
}