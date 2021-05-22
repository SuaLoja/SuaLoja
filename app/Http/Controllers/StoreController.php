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
            'featured_product' => Product::orderBy('quantity_in_stock')->first()
        ]);
    }

    public function allProducts(Store $store)
    {
        return view('store.products', [
            'store' => $store,
            'products' => $store->products()->simplePaginate(9),
        ]);
    }

    public function allCategories(Store $store)
    {
        return view('store.categories', [
            'store' => $store,
            'categories' => $store->categories()->simplePaginate(9),
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
