<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $table = 'imports';
    protected $fillable = ['id', 'idWarehouse', 'idAdmin', 'date', 'VAT', 'Note', 'status', 'created_at', 'updated_at'];
}
