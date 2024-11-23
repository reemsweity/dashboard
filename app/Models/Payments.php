<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable = ['user_id','appointment_id','amount','status','payment_method','is_active'];
}
