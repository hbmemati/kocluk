<?php

namespace App\Models\Education;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lesson_id',
        'content',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
