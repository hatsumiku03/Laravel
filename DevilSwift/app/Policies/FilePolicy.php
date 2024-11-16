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

    public function view(?User $user, File $file): bool{
        // | Acá se comprueba y se devuelve true si public visibility | //
        if($file->public_visibility == 1){
            return true;
        }
        
        // | Acá dentro del if se pilla al usuario logeado y se devuelve un true o false si le pertenece a este | //
        if($user){
            return $file->user->id === $user->id;
        }

        // | Si las anteriores condiciones no se cumplen, de default te ve | //
        return false;
        
    }

    public function delete(User $user, File $file){
        return $user->id === $file->user_id;
    }
}
