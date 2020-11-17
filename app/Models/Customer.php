<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id', 'username', 'password', 'fullname', 'phone', 'email', 'address', 'status', 'created_at', 'updated_at'];
}
