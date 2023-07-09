<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // relation many-to-many entre Category et Question
    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
