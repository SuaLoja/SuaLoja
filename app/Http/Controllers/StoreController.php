<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class StoreController extends Controller
{
    public function index(Store $store)
    {
        $products = null;

        if (Request::query('category_id')) {
            $products = $store->products()->where(
                'category_id', Request::query('category_id')
            )->paginate(9);
        } else {
            $products = $store->products()->orderBy('title')->paginate(9);
        }

        return Response::view('store.index', [
            'store' => $store,
            'categories' => $store->categories()->orderBy('name')->get(),
            'products' => $products
        ]);
    }

    public function show(Store $store, Product $product)
    {
        return Response::view('store.product', [
            'store' => $store,
            'product' => $product
        ]);
    }
}
