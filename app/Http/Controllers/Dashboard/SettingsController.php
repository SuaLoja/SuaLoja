<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:15'],
        ]);
        
        Auth::user()->store->update([
            'name' => $request->name,
        ]);

        return back();
    }
}
