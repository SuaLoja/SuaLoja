<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Settings\UpdateSettingsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Spatie\Regex\Regex;

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
        }

        // Remove slashes, spaces and parentheses.
        $store->whatsapp_number = Regex::replace('/[^0-9+]/', '', $request->validated()['whatsapp_number'])->result();
        $store->facebook_url = $request->validated()['facebook_url'];
        $store->instagram_url = $request->validated()['instagram_url'];

        $store->save();

        return Redirect::back();
    }
}
