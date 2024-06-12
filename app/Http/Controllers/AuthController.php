<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Exception;

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
            } elseif ($user->role == 'student') {
                return to_route('student');
            }
            return 'user';
        }
    }

    // Login Page
    public function loginPage()
    {
        if (Auth::user()) {
            return redirect('/');
        }
        return view('login');
    }

    // Login
    public function userLogin(LoginRequest $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()
                ->back()
                ->with(['error' => 'The provided email does not exist!'])
                ->withInput();
        } elseif (!Hash::check($request->password, $user->password)) {
            return redirect()
                ->back()
                ->with(['error' => 'The provided password is incorrect!'])
                ->withInput();
        }

        if (Auth::guard()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return to_route('checkUser');
        } else {
            return redirect()
                ->back()
                ->with(['error' => 'Login failed! Please try again.'])
                ->withInput();
        }
    }

    // Register Page
    public function registerPage()
    {
        if (Auth::user()) {
            return redirect('/');
        }
        return view('register');
    }

    // Register
    public function userRegister(RegisterRequest $request)
    {
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'school'    => $request->school,
            'education' => $request->education,
            'gender'    => $request->gender,
            'address'   => $request->address,
            'password'  => Hash::make($request->password),
        ]);

        return to_route('login')->with(['status' => 'create_success']);
    }

    public function checkUser()
    {
        $user = Auth::user();
        if (!$user) {
            return to_route('login');
        } else {
            if ($user->role == 'admin') {
                return to_route('admin');
            } elseif ($user->role == 'user') {
                return to_route('user');
            } elseif ($user->role == 'student') {
                return to_route('student');
            }
        }
    }
}
