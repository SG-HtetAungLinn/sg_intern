<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Auth
    public function auth()
    {
        $user = Auth::user();
        if (!$user) {
            return to_route('login');
        } else {
            if ($user->role == 'admin') {
                return to_route('admin');
            } elseif ($user->role == 'user') {
                return to_route('home');
            }
        }
    }

    // Login Page
    public function loginPage()
    {
        return view('login');
    }

    // Login
    public function userLogin(LoginRequest $request)
    {
        dd($request->toArray());
    }
    // Register Page
    public function registerPage()
    {
        return view('register');
    }
}
