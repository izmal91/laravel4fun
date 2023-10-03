<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';

    
    protected $fillable = ['name','email','mobile_no','user_type','created_from'];
}
