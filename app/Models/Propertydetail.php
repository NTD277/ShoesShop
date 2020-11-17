<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertydetail extends Model
{
    protected $table = 'propertydetails';
    protected $fillable = ['id', 'detail', 'status', 'created_at', 'updated_at'];
}
