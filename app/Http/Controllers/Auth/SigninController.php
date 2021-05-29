<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SigninRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class SigninController extends Controller
{
    public function index()
    {
        return Response::view('auth.signin');
    }

    public function store(SigninRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('message', trans('auth.failed'));
        }

        return Redirect::to('/');
    }
}
