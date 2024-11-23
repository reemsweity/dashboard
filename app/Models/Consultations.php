<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultations extends Model
{
    use HasFactory;
    protected $table='consultations';
    protected $fillable = ['user_id','doctor_id','title','fee','status','description','is_active'];
}
