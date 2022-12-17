<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'status',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
