<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Category $category)
    {
        return $user->store->id === $category->store_id;
    }

    public function delete(User $user, Category $category)
    {
        return $user->store->id === $category->store_id;
    }
}
