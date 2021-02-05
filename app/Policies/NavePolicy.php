<?php

namespace App\Policies;

use App\Nave;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NavePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Nave  $nave
     * @return mixed
     */
    public function view(User $user, Nave $nave)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Nave  $nave
     * @return mixed
     */
    public function update(User $user, Nave $nave)
    {
        // revisa si el usuario autenticado es el mismo que creo la nave (ejemplo)
        // return $user->id === $nave->user_id
        //ejemplo del tutorial return $user->id === $receta->user_id
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Nave  $nave
     * @return mixed
     */
    public function delete(User $user, Nave $nave)
    {
        //
        
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Nave  $nave
     * @return mixed
     */
    public function restore(User $user, Nave $nave)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Nave  $nave
     * @return mixed
     */
    public function forceDelete(User $user, Nave $nave)
    {
        //
    }
}
