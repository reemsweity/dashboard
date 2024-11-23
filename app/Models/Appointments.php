<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table='appointments';
    protected $fillable=['doctor_id','user_id','date_time','availability','zoom_link','zoom_pass','zoom_id','status','is_active'];
}
