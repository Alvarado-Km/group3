<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function signup(Request $request)
    {
        $verifyData = $request->validate(
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:30',
                'name' => 'required|min:3',
                'birthday' => 'required|date',
                'state' => 'nullable',
                'is_artisan' => 'required|boolean'
            ]
        );

        $user = User::create($verifyData);
        if ($user) {
            Auth::login($user);
            return redirect('/homepage');
        }

        return back()->withErrors(['email' => 'Ingrese dirección valida',
            'password' => 'Este campo es requerido',
            'name' => 'Ingrese nombre válido',
            'birthday' => 'Ingrese fecha valida']);

    }
}
