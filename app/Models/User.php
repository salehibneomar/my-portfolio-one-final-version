<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function settings(){
        return $this->hasOne(AppSettings::class, 'user_id', 'id');
    }

    public function media(){
        return $this->hasMany(Media::class, 'user_id', 'id');
    }

    public function skills(){
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function problem_solvings(){
        return $this->hasMany(ProblemSolving::class, 'user_id', 'id');
    }

    public function education(){
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function activities(){
        return $this->hasMany(Activity::class, 'user_id', 'id');
    }

    public function experiences(){
        return $this->hasMany(Experience::class, 'user_id', 'id');
    }

    public function projects(){
        return $this->hasMany(Project::class, 'user_id', 'id');
    }
    
}
