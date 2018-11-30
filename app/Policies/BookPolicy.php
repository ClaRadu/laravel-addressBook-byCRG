<?php

namespace App\Policies;

use App\User;
use App\Book;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Book  $book
     * @return bool
     */
    public function destroy(User $user, Book $book) {
        return $user->id === $book->usr_id;
    }
}
