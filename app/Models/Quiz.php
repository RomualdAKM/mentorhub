<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'option1',
        'option2',
        'answer',
        'techno_id'
    ];

    public function techno()
    {
        return $this->belongsTo(Techno::class);
    }

    // Relation many-to-many entre Techno et User
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
}
