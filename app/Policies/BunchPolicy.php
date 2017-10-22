<?php

namespace App\Policies;

use App\User;
use App\Bunch;
use Illuminate\Auth\Access\HandlesAuthorization;

class BunchPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the bunch.
     *
     * @param  \App\User  $user
     * @param  \App\Bunch  $bunch
     * @return mixed
     */
    public function view(User $user, Bunch $bunch)
    {
        return $user->id == $bunch->created_by;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return isset($user);
    }

    /**
     * Determine whether the user can update the bunch.
     *
     * @param  \App\User  $user
     * @param  \App\Bunch  $bunch
     * @return mixed
     */
    public function update(User $user, Bunch $bunch)
    {
        return $user->id == $bunch->created_by;
    }

    /**
     * Determine whether the user can delete the bunch.
     *
     * @param  \App\User  $user
     * @param  \App\Bunch  $bunch
     * @return mixed
     */
    public function delete(User $user, Bunch $bunch)
    {
        return $user->id == $bunch->created_by;
    }
}
