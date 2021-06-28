<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\SignupRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class SignupController extends Controller
{
    public function index()
    {
        return Response::view('auth.signup');
    }

    public function store(SignupRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->store()->create([
            'name' => $request->store_name,
            'url' => Str::slug($request->store_name),
        ]);

        return Redirect::route('auth.signin');
    }
}
