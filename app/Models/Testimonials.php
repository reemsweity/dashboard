<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $table ='testimonials';
    protected $fillable = ['user_id','doctor_id','testimonial_text','rating','status','is_active'];
}
