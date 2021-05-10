<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Product $product)
    {
        return $user->store->id === $product->store_id;
    }

    public function delete(User $user, Product $product)
    {
        return $user->store->id === $product->store_id;
    }
}
