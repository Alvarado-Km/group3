<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/homepage');
        }

        return back()->withErrors(['email' => 'credenciales incorrectas', 'password' => 'credenciales incorrectas']);
    }
    
    public function create(Request $request)
    {
        $verifyData = $request->validate(
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:30',
                'name' => 'required|min:3',
                'birthday' => 'required|date'
            ]
        );
        if (User::create($verifyData)) {
            redirect('/homepage');
        }
        return back()->withErrors([]);
    }
}