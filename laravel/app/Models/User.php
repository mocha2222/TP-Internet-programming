<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Fillable fields
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Hidden fields
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // ----------------------
    // Roles & Permissions
    // ----------------------
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole(string $role): bool
    {
        return $this->roles()->where('name', $role)->exists();
    }

    public function hasPermission(string $permission): bool
    {
        return $this->roles()
            ->whereHas('permissions', fn ($q) => $q->where('name', $permission))
            ->exists();
    }

    // ----------------------
    // Custom Relationships
    // ----------------------

    // A user can be an author (1:1)
    public function author()
    {
        return $this->hasOne(Author::class);
    }

    // A user can be an audience (1:1)
    public function audience()
    {
        return $this->hasOne(Audience::class);
    }

    // A user wrote many comments (1:M)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
