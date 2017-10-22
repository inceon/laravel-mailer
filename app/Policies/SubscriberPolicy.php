<?php

namespace App\Policies;

use App\User;
use App\Subscriber;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscriberPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function view(User $user, Subscriber $subscriber)
    {
        return $user->id == $subscriber->bunch->created_by;
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
     * Determine whether the user can update the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function update(User $user, Subscriber $subscriber)
    {
        return $user->id == $subscriber->bunch->created_by;
    }

    /**
     * Determine whether the user can delete the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function delete(User $user, Subscriber $subscriber)
    {
        return $user->id == $subscriber->bunch->created_by;
    }
}
