<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index()
    {
        return view('dashboard.products.index');
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'min:10, max:40'],
            'description' => ['required', 'min:10', 'max:255'],
            'price' => ['required']
        ]);

        Auth::user()->store->products()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => floatval($request->price)
        ]);

        return redirect()->route('dashboard.products');
    }

    public function update(Product $product, Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'min:10, max:40'],
            'description' => ['required', 'min:10', 'max:255'],
            'price' => ['required']
        ]);

        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->price = floatval($request->price);

        Auth::user()->store->products()->save($product);

        return redirect()->route('dashboard.products');
    }

    public function destroy(Product $product)
    {
        Auth::user()->store->products()->where('id', $product->id)->delete();

        return back();
    }
}
