<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    protected static function booted()
    {
        static::saving(function ($category) {
            $categoryExists = !!$category->store->categories()->where('name', $category->name)->first();

            if ($categoryExists) {
                throw ValidationException::withMessages([
                    'name' => trans('validation.unique', [
                        'attribute' => trans('validation.attributes.name'),
                    ]),
                ]);
            }

            $category->slug = Str::slug($category->name);
        });
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
