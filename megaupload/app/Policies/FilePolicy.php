<?php

namespace App\Policies;

use App\Models\File;
use App\Models\User;

class FilePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    // Change this
    public function upload(User $user){
        return $user->id === 1;
    }

    public function delete(User $user, File $file){
        return $user->id === $file->user_id;
    }
}
