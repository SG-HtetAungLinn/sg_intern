<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return to_route('login');
        } else {
            if ($user->role == 'admin') {
                return redirect('admin');
            } elseif ($user->role == 'user') {
                return redirect('home');
            }
        }
        return view('admin.dashboard.dashboard');
    }
}
