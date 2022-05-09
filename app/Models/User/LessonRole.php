<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonRole extends Model
{
    use HasFactory;

    protected $fillable = [
       'lesson_id', 'role_id', 'user_id'

    ];
}
