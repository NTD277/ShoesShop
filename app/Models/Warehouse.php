<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouses';
    protected $fillable = ['id', 'name', 'address', 'gmail', 'phone', 'status', 'created_at', 'updated_at'];
}
