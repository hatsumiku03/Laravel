<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'body',
        'link',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
