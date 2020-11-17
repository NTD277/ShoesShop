<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productproperty extends Model
{
    protected $table = 'productproperties';
    protected $fillable = ['id', 'idProduct', 'idProperty', 'status', 'created_at', 'updated_at'];
}
