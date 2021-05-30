<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use function PHPUnit\Framework\isNull;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'image_path',
        'quantity_in_stock',
        'category_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function booted()
    {
        static::saving(function ($product) {
            $slug = Str::slug($product->title);
            $slugExists = !!$product->store->products()->where('slug', $slug)->first();

            if ($slugExists) {
                $slug .= '-' . Str::random(9);
            }

            $product->slug = $slug;
        });
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
