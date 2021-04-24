<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('message', 'Credenciais inválidas');
        }

        return redirect('/');
    }
}
