<?php

namespace App\Policies;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ForumPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Forum $forum)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can create threads on the specified forum.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $forum
     * @return \Illuminate\Auth\Access\Response
     */
    public function createThread(User $user, Forum $forum)
    {
        //Regular, unbanned user trying to post and forum is open for posting
        if($user->account_status === config('users.USER_IS_NOT_BANNED') &&
           $forum->forum_status === config('forum.FORUM_CAN_POST'))
        {
            return Response::allow('Thread successfully created.');
        }

        //Regular, unbanned user trying to post and forum is closed for posting
        else if($user->account_status === config('users.USER_IS_NOT_BANNED') &&
                $forum->forum_status === config('forum.FORUM_STAFF_ONLY'))
        {
            return Response::deny('You are not allowed to post threads on this forum.');
        }

        //Banned user - kick out.
        else if($user->account_status === config('users.USER_IS_BANNED'))
         {
            return redirect('/logout');
         }


    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Forum $forum)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Forum $forum)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Forum $forum)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Forum $forum)
    {
        //
    }
}
