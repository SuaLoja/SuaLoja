<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create()
    {
        return view('dashboard.stores.create');
    }

    public function store(Request $request)
    {
        // TODO
    }
}
