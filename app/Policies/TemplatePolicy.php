<?php

namespace App\Policies;

use App\User;
use App\Template;
use Illuminate\Auth\Access\HandlesAuthorization;

class TemplatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the template.
     *
     * @param  \App\User  $user
     * @param  \App\Template  $template
     * @return mixed
     */
    public function view(User $user, Template $template)
    {
        return $user->id == $template->created_by;
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
     * Determine whether the user can update the template.
     *
     * @param  \App\User  $user
     * @param  \App\Template  $template
     * @return mixed
     */
    public function update(User $user, Template $template)
    {
        return $user->id == $template->created_by;
    }

    /**
     * Determine whether the user can delete the template.
     *
     * @param  \App\User  $user
     * @param  \App\Template  $template
     * @return mixed
     */
    public function delete(User $user, Template $template)
    {
        return $user->id == $template->created_by;
    }
}
