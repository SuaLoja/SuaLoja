<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show(Request $request, Store $store)
    {
        ddd($store);
    }
}
