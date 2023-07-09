<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation one-to-many entre Article et Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relation one-to-many entre Article et Like
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}