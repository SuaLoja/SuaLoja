<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Store $store)
    {
        return view('store.index', [
            'store' => $store,
        ]);
    }

    public function showProducts(Store $store)
    {
        return view('store.products', [
            'store' => $store,
        ]);
    }
}
