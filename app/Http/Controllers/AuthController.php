<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
            // $request->validate([
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|string|email|max:255|unique:users',
            //     'password' => 'required|string|min:8',
            // ]);

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
            $company = Company::where('user_id', $user->id)->first();
            if ($user->type === 'employer') {
                $request->session()->put("company_id", $company->id);
                return redirect('/dashboard/jobs');
            } elseif ($user->type === 'employee') {
               return redirect('/');
            } else {
                return "admin login";
            }
        } else {
            return redirect()->back()->with('success', 'Invalid credentials');
        }
    
    }
    public function logout()
    {
        

            Auth::logout(); 

                return redirect('/');
    }
}
