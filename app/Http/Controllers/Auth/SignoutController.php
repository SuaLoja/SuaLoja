<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SignoutController extends Controller
{
    public function store()
    {
        Auth::logout();

        return Redirect::to('/');
    }
}
