<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Settings\UpdateSettingsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        return Response::view('dashboard.settings.index');
    }

    public function store(UpdateSettingsRequest $request)
    {
        Auth::user()->store->update($request->validated());

        $store = Auth::user()->store;

        if ($request->hasFile('banner')) {
            $bannerPath = Storage::putFile(
                'images/store_thumbnails/' . $store->id,
                $request->file('banner'),
            );

            $store->banner_path = 'storage/' . $bannerPath;
            $store->save();
        }

        return Redirect::back();
    }
}
