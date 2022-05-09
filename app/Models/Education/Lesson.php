<?php

namespace App\Models\Education;

use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lesson extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'category_id',
        'status',
        'limit',
        'created_by',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }


    public function scopeactive($query)
    {
        return $query->where('status', true);
    }


    public function students()
    {
        return $this->hasMany(User\LessonRole::class)
            ->where('role_id', 3)->where('status', true)
            ->join('users', 'users.id', '=', 'lesson_roles.user_id');
    }

    public function allstudents()
    {
        return $this->hasMany(User\LessonRole::class)
            ->where('role_id', 3)
            ->join('users', 'users.id', '=', 'lesson_roles.user_id');
    }

    public function teachers()
    {
        return $this->hasMany(User\LessonRole::class)->where('role_id', 2) ->join('users', 'users.id', '=', 'lesson_roles.user_id');;
    }

    public function admins()
    {
        return $this->hasMany(User\LessonRole::class)->where('role_id', 1);
    }











}
