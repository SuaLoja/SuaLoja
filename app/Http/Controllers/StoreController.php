<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function allProducts(Store $store)
    {
        return view('store.products', [
            'store' => $store,
        ]);
    }

    public function showProduct(Store $store, Product $product)
    {
        return view('store.product', [
            'store' => $store,
            'product' => $product
        ]);
    }
}
