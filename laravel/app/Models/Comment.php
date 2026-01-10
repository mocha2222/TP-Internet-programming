<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id'];

    // Polymorphic relationship (can belong to author, audience, or article)
    public function commentable()
    {
        return $this->morphTo();
    }

    // User who wrote the comment
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
