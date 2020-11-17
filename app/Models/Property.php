<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $fillable = ['id', 'idDetailProperty', 'name', 'status', 'created_at', 'updated_at'];
}
