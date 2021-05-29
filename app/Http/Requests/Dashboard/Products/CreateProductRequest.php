<?php

namespace App\Http\Requests\Dashboard\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'min:10, max:40'],
            'description' => ['required', 'min:10', 'max:255'],
            'price' => ['required', 'numeric'],
            'category_id' => ['nullable'],
            'images' => ['required', 'max:5'],
            'images.*' => ['mimes:jpg,png,jpeg', 'max:5048'],
            'quantity_in_stock' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'images.max' => 'Você só pode escolher até 5 imagens para o produto.'
        ];
    }
}
