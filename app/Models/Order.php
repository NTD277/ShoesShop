<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['id', 'idUser', 'idAdmin', 'price', 'date', 'namePerson', 'address', 'phone', 'note', 'status', 'created_at', 'updated_at'];
}
