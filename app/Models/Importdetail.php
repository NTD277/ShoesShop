<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importdetail extends Model
{
    protected $table = 'importdetails';
    protected $fillable = ['id', 'idImport', 'idProduct', 'price', 'qty', 'note', 'status', 'created_at', 'updated_at'];
}
