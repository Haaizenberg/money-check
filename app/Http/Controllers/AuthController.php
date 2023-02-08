<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\SignInRequest;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signIn(SignInRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();

            return redirect()->intended('money-check');
        }

        return back()->withErrors([
            'auth-credentials' => 'Неверные email или пароль',
        ]);
    }


    public function signUp(SignUpRequest $request)
    {
        $credentials = $request->validated();       
        $credentials['password'] = Hash::make($credentials['password']);
        $newUser = User::create($credentials);

        Auth::login($newUser, true);

        $request->session()->regenerate();

        return redirect()->intended('money-check');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
