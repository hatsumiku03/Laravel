<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'link',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function votes(): HasMany{
        return $this->hasMany(Vote::class);
    }

    public function getTimeSinceCreatedAttribute() { return Carbon::parse($this->created_at)->diffForHumans(); }
}
