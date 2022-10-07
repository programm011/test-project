<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if ($request->isMethod('GET')) {
            return view('login');
        }

        if (auth()->attempt($request->validated())) {
            return to_route('home');
        }

        return back()->withInput()->withErrors(__('auth.failed'));
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return to_route('home');
    }
}
