<?php

namespace App\Http\Requests\Dashboard\Categories;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        $category = $this->route('category');

        return $this->user()->can('access', $category);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:20'],
        ];
    }
}
