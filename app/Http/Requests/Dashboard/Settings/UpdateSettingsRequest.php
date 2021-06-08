<?php

namespace App\Http\Requests\Dashboard\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:15'],
            'description' => ['nullable', 'max:255'],
            'banner' => ['nullable', 'mimes:jpg,png,jpeg', 'max:5048'],
        ];
    }
}
