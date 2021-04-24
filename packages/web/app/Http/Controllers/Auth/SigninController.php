<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }

    public function store(Request $request)
    {
        ddd($request);
    }
}
