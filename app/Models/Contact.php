<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table ='contact';
    protected $fillable = ['user_id','name','email','phone','msg','subject','status','is_active'];
}
