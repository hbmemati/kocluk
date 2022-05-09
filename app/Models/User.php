<?php

namespace App\Models;

use App\Models\Education\Role;
use App\Models\User\LessonRole;
use App\Models\User\Type;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'type_id',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function lessons()
    {
        return $this->hasMany(LessonRole::class, 'user_id', 'id')->where('status', true);
    }

    public function wlessons()
    {
        return $this->hasMany(LessonRole::class, 'user_id', 'id')->where('status', false);
    }

}
