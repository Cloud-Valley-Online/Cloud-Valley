<?php

namespace App\Policies;

use App\Models\Forum;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ThreadPolicy
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
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Thread $thread)
    {
        //
    }

    /**
     * Determine whether the user can create a thread on the specified forum.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Thread $thread)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Thread $thread)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Thread $thread)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Thread $thread)
    {
        //
    }

    /**
     *  Verify that the user is logged in, the thread
     *  is not locked and the user is not banned.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Thread  $thread
     *
     * @return \Illuminate\Auth\Access\Response
     */
    public function canPost(User $user, Thread $thread)
    {
         if($user->account_status === config('users.USER_IS_NOT_BANNED') &&
            $thread->thread_locked === config('forum.THREAD_IS_NOT_LOCKED'))
         {
            return Response::allow('Post successful');
         }

         else if($thread->thread_locked === config('forum.THREAD_IS_LOCKED') &&
                 $user->account_status === config('users.USER_IS_NOT_BANNED'))
         {
            return Response::deny('Thread is locked');
         }

         else if($user->account_status === config('users.USER_IS_BANNED'))
         {
            return redirect('/logout');
         }

    }
}
