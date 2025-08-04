<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'tag_id',
        'owner_id',
    ];

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function getFullNameAttribute(): string
    {
        return "{$this->firstname} {$this->lastname}";
    }
}
