<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function modify(User $user, User $model)
    {
        return $user->id === $model->id;
    }
}
