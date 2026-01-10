<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'user_id'];

    // 1. Author belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 3. Author wrote multiple articles
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // 7. Author has many comments (polymorphic)
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // 9. Author has many audiences through articles
    public function audiences()
    {
        return $this->hasManyThrough(Audience::class, Article::class);
    }
}
