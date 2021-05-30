<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AuthorizeUserRequest;
use App\Http\Requests\Dashboard\Categories\CreateCategoryRequest;
use App\Http\Requests\Dashboard\Categories\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class CategoriesController extends Controller
{
    public function index()
    {
        return Response::view('dashboard.categories.index');
    }

    public function create()
    {
        return Response::view('dashboard.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $categoryExists = !!Auth::user()->store->categories()->where('name', $request->validated()['name'])->first();

        if ($categoryExists) {
            return Redirect::back()->with('error', trans('validation.unique', [
                'attribute' => trans('validation.attributes.name'),
            ]));
        }

        Auth::user()->store->categories()->create($request->validated());

        return Redirect::route('dashboard.categories');
    }

    public function edit(AuthorizeUserRequest $request, Category $category)
    {
        return Response::view('dashboard.categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $categoryExists = !!Auth::user()->store->categories()->where('name', $request->validated()['name'])->first();

        if ($categoryExists) {
            return Redirect::back()->with('error', trans('validation.unique', [
                'attribute' => trans('validation.attributes.name'),
            ]));
        }

        $category->name = $request->name;

        Auth::user()->store->categories()->save($category);

        return Redirect::route('dashboard.categories');
    }

    public function destroy(AuthorizeUserRequest $request, Category $category)
    {
        Auth::user()->store->categories()->where('id', $category->id)->delete();

        return Redirect::back();
    }
}
