<?php

namespace App\Repositories;

use App\User;

class TramiteRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->dependencia()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
