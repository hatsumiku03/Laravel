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

    // This is a example of upload policy
    // public function upload(User $user){
    //    return $user->ban === 'ban';
    // }v 

    public function view(User $user, File $file): bool{
        return $file->public_visibility == 1 || $file->user->id === $user->id;
    }
    // ! As an no loged user you can't see no one file, fix it !

    public function delete(User $user, File $file){
        return $user->id === $file->user_id;
    }
}
