<?php

namespace App\Models;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    public function size(){
        return Storage::size($this->path);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // | Use the search method on AppServiceProvider |
    public function scopeSearch(Builder $query, $field, $search = null) {
        return $query->when($search, function ($query, $search) use ($field) { 
            return $query->where($field, 'like', '%' . $search . '%'); 
        });
    }
}
