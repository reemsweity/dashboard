<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table='doctors';
    protected $fillable = ['about',
        'work_experience',
        'year_experience',
        'facebook',
        'twitter',
        'available_time',
        'profile_img',
        'specialization',
        'specialization_id',
        'email',
        'pass',
        'rating',
        'phone',
        'is_admin_added',
        'is_active',];
        
}
