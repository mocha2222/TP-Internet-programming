<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    protected $fillable = ['name', 'user_id'];

    // 2. Audience belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 5. Audience has many comments (polymorphic)
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // 4. Audience subscribes to many articles (many-to-many)
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
