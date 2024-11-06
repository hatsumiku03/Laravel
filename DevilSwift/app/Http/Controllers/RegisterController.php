<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => [ 'required',
                            'min:8'
                            // You must add regex rules :x
                            //'regex:/[0-9]/',
                            //'regex:/[a-z]/',
                            //'regex:/[A-Z]/',
                            //'regex:/[@$!%*?&]/'
        ]
    ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
