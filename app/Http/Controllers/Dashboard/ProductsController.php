<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        if (Auth::user()->cannot('update', $product)) {
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
            'images' => ['required', 'max:5'],
            'images.*' => ['mimes:jpg,png,jpeg', 'max:5048'],
            'quantity_in_stock' => ['required']
        ], [
            'images.max' => 'Você só pode escolher até 5 imagens para o produto.'
        ]);

        $product = Auth::user()->store->products()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => floatval($request->price),
            'quantity_in_stock' => $request->quantity_in_stock,
            'category_id' => $request->category,
        ]);

        foreach ($request->images as $image) {
            $imagePath = Storage::putFile(
                'images/products/' . $product->id,
                $image
            );

            $product->images()->create([
                'image_path' => 'storage/' . $imagePath
            ]);
        }

        return redirect()->route('dashboard.products');
    }

    public function update(Product $product, Request $request)
    {
        if (Auth::user()->cannot('delete', $product)) {
            abort(401);
        }

        $this->validate($request, [
            'title' => ['required', 'min:10, max:40'],
            'description' => ['required', 'min:10', 'max:255'],
            'price' => ['required'],
            'category' => ['nullable'],
            'images' => ['nullable', 'max:5'],
            'images.*' => ['mimes:jpg,png,jpeg', 'max:5048'],
            'quantity_in_stock' => ['required']
        ], [
            'images.max' => 'Você só pode escolher até 5 imagens para o produto.'
        ]);

        if ($request->images) {
            $product->images()->delete();
            Storage::deleteDirectory('images/products/' . $product->id);

            foreach ($request->images as $image) {
                $imagePath = Storage::putFile(
                    'images/products/' . $product->id,
                    $image
                );

                $product->images()->create([
                    'image_path' => 'storage/' . $imagePath
                ]);
            }
        }

        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->price = floatval($request->price);
        $product->quantity_in_stock = $request->quantity_in_stock;
        $product->category_id = $request->category;

        Auth::user()->store->products()->save($product);

        return redirect()->route('dashboard.products');
    }

    public function destroy(Product $product)
    {
        if (Auth::user()->cannot('delete', $product)) {
            abort(401);
        }

        Auth::user()->store->products()->where('id', $product->id)->delete();

        return back();
    }
}
