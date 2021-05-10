<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    public function index()
    {
        return view('dashboard.products.index');
    }

    public function create()
    {
        return view('dashboard.products.create', [
            'categories' => Auth::user()->store
                ->categories()
                ->orderBy('name')
                ->get()
                ->map
                ->only('id', 'name'),
        ]);
    }

    public function edit(Product $product)
    {
        $userHasProduct = boolval(Auth::user()->store->products()->where('id', $product->id)->first());

        if (!$userHasProduct) {
            return redirect()->to('dashboard');
        }

        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => Auth::user()->store
                ->categories()
                ->orderBy('name')
                ->get()
                ->map
                ->only('id', 'name'),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'min:10, max:40'],
            'description' => ['required', 'min:10', 'max:255'],
            'price' => ['required'],
            'category' => ['nullable'],
        ]);

        Auth::user()->store->products()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => floatval($request->price),
            'category_id' => $request->category,
        ]);

        return redirect()->route('dashboard.products');
    }

    public function update(Product $product, Request $request)
    {
        if (!Auth::user()->store->products()->where('id', $product->id)->get()) {
            return redirect()->to('dashboard');
        }

        $this->validate($request, [
            'title' => ['required', 'min:10, max:40'],
            'description' => ['required', 'min:10', 'max:255'],
            'price' => ['required'],
            'category' => ['nullable']
        ]);

        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->price = floatval($request->price);
        $product->category_id = $request->category;

        Auth::user()->store->products()->save($product);

        return redirect()->route('dashboard.products');
    }

    public function destroy(Product $product)
    {
        Auth::user()->store->products()->where('id', $product->id)->delete();

        return back();
    }
}
