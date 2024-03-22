<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (!Auth::attempt($login)) {
            return response([
                'message' => 'Invalid Credentials'
            ], 403);
        }

        return response([


            'user' => auth()->user(),
            'token' => $request->user()->createToken('secret')->plainTextToken
        ], 200);
    }
}
