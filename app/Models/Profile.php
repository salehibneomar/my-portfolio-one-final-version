<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    const IMAGE_DIR = 'images/profile/';

    protected $fillable = [
        'fullname',
        'nickname',
        'dob',
        'phone',
        'email',
        'present_addr',
        'about',
        'vision',
	    'nationality',
	    'religion',
	    'marital_status',
        'typed_quotes',
        'education',
        'professional_title',
        'formal_image',
        'user_id',
        'cv',
        'current_job',
    ];

    protected $hidden = [
        'id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = ['age'];

    public function getAgeAttribute(){
        return Carbon::parse($this->attributes['dob'])->age;
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
