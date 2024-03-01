<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login-page')->with('success', 'Registered successfully!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:50',
            'password' => 'required|string|min:3'
        ]);
    
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->type === 'employer') {
                return redirect('/dashboard/jobs');
            } elseif ($user->type === 'employee') {
                return "employee login";
            } else {
                return "admin login";
            }
        } else {
            return redirect()->route('login')->with('success', 'Invalid credentials');
        }
    
    }
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

            Auth::logout(); 

                return redirect('/');
    }
}
