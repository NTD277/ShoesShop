<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table = 'orderdetails';
    protected $fillable = ['id', 'idProduct', 'qty', 'note', 'status', 'created_at', 'updated_at'];
}
