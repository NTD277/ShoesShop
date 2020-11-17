<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['id', 'name', 'slug','image','status', 'created_at', 'updated_at'];

    public function insertDataBrand($dataBrand)
    {
        return Brand::create($dataBrand);
    }

    public function SelectAll()
    {
        $newBrand = DB::table('brands')
            ->where('status', 1)
            ->get();
        return $newBrand;
    }
}
