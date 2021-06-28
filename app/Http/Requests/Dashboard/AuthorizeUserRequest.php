<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AuthorizeUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        $product = $this->route('product');
        $category = $this->route('category');

        if ($product)
            return $this->user()->can('access', $product);

        if ($category)
            return $this->user()->can('access', $category);

        return false;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
