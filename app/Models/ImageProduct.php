<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table = 'image_products';
    protected $fillable = ['id', 'idProduct', 'name', 'status', 'created_at', 'updated_at'];
}
