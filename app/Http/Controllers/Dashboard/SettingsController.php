<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Settings\UpdateSettingsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class SettingsController extends Controller
{
    public function index()
    {
        return Response::view('dashboard.settings.index');
    }

    public function store(UpdateSettingsRequest $request)
    {
        Auth::user()->store->update($request->validated());

        return Redirect::back();
    }
}
