<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    const THUMBNAIL_DIR = 'images/projects/';

    protected $fillable = [
        'name',
        'thumbnail',
        'description',
        'github',
        'video',
        'live',
        'techs',
        'platform',
        'platform_slug',
        'user_id',
        'priority',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
