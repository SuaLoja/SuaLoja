<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('dashboard.categories.index');
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:20'],
        ]);

        Auth::user()->store->categories()->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('dashboard.categories');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        $userHasCategory = boolval(Auth::user()->store->categories()->where('id', $category->id)->first());

        if (!$userHasCategory) {
            return redirect()->to('dashboard');
        }

        return view('dashboard.categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(Request $request, Category $category)
    {
        if (!Auth::user()->store->categories()->where('id', $category->id)->get()) {
            return redirect()->to('dashboard');
        }

        $this->validate($request, [
            'name' => ['required', 'max:20'],
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        Auth::user()->store->categories()->save($category);

        return redirect()->route('dashboard.categories');
    }

    public function destroy(Category $category)
    {
        Auth::user()->store->categories()->where('id', $category->id)->delete();

        return back();
    }
}
