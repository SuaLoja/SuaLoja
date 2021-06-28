<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AuthorizeUserRequest;
use App\Http\Requests\Dashboard\Products\CreateProductRequest;
use App\Http\Requests\Dashboard\Products\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        return Response::view('dashboard.products.index');
    }

    public function create()
    {
        return Response::view('dashboard.products.create', [
            'categories' => Auth::user()->store
                ->categories()
                ->orderBy('name')
                ->get()
                ->map
                ->only('id', 'name'),
        ]);
    }

    public function store(CreateProductRequest $request)
    {
        $product = Auth::user()->store->products()->create($request->validated());

        foreach ($request->images as $image) {
            $imagePath = Storage::putFile(
                'images/products/' . $product->id,
                $image
            );

            $product->images()->create([
                'image_path' => 'storage/' . $imagePath
            ]);
        }

        return Redirect::route('dashboard.products');
    }

    public function edit(AuthorizeUserRequest $request, Product $product)
    {
        return Response::view('dashboard.products.edit', [
            'product' => $product,
            'categories' => Auth::user()->store
                ->categories()
                ->orderBy('name')
                ->get()
                ->map
                ->only('id', 'name'),
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
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
        $product->description = $request->description;
        $product->price = floatval($request->price);
        $product->quantity_in_stock = $request->quantity_in_stock;
        $product->category_id = $request->category_id;

        Auth::user()->store->products()->save($product);

        return Redirect::route('dashboard.products');
    }

    public function destroy(AuthorizeUserRequest $request, Product $product)
    {
        Auth::user()->store->products()->where('id', $product->id)->delete();

        return Redirect::back();
    }
}
